function generoExcluirFetch(id){
    if(confirm('Confirma a exclusão do genero de id '+id+'?')){ 
        let genero = {"id": id};
        let configMetodo = {
            method: "DELETE",
            body: JSON.stringify(genero),
            headers:{
                "Content-Type": "application/json;charset=UTF-8"
            }
        };
        //fetch enviando o id do genero a ser excluído
        fetch("../controller/generoExcluir.php", configMetodo)
            .then(function(resposta){
                if(!resposta.ok===true){
                    let msg = resposta.status + " - " + resposta.statusText;
                    throw new Erro(msg);
                }else
                    return resposta.json();
            })
            .then(function(respostaJSON){
                if(respostaJSON.erro===false)
                    cbSucessoExcluirGenero(respostaJSON);
                else
                    cbErroExcluirGenero(respostaJSON.msgErro);
            })
            .catch(function(erro){
                cbErroExcluirGenero(erro);
            })
    }
}

//Função de callback
function cbSucessoExcluirGenero(respostaJSON){
    document.querySelector('#msgSucesso').textContent = respostaJSON.msgSucesso;
    //Em seguida, redirecione para a página principal
    setTimeout(function(){
        limparSpans();
        generoListarFetch();
    },1500);
}

function cbErroExcluirGenero(erro) {
    document.querySelector('#msgErro').textContent = erro;
    setTimeout(function() {
        limparSpans();
        generoListarFetch();
    }, 1500);
}