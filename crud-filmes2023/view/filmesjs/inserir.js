//Carregando os generos no combo 
window.onload = function(){
     fetch("../controller/generoListar.php")
        .then(function(resposta){
            if(!resposta.ok===true){
                let msg = resposta.status + " - " + resposta.statusText;
                document.querySelector('#msgErro').textContent = msg;
            }else
                return resposta.json(); 
        })
        .then(function(respostaJSON){
            if(respostaJSON.erro===false)
                cbSucessoListarGeneroInserir(respostaJSON);
            else
                document.querySelector('#msgErro').textContent = respostaJSON.msgErro;
        })
        .catch(function(erro){
            document.querySelector('#msgErro').textContent = erro;
        });
}
//callback de listarGenero p/ inserir
function cbSucessoListarGeneroInserir(respostaJSON){
    montarSelect(respostaJSON.dados);
}
//Monta o combo de gêneros
function montarSelect(dados){
    for (const i in dados) {
        let genero = dados[i];
        let $opt = document.createElement('option');
        $opt.value= genero.id;
        $opt.textContent = genero.descricao;
        document.querySelector('#cmbGeneros').appendChild($opt);
    }
}
//Recupera o elemento (Também poderíamos usar o form e o evento submit)        
const $btnEnviar = document.querySelector('#enviar');
$btnEnviar.addEventListener('click', function(event){
    event.preventDefault();
    //Monta um objeto filme recuperando os elementos do DOM
    let filme = {
        "titulo": document.querySelector('#titulo').value,
        //(alterado em 08/06)
        "avaliacao" : parseFloat(document.querySelector('#avaliacao').value),
        "genero_id" : parseInt(document.querySelector('#cmbGeneros').value)
    };
    let configMetodo = {
        method : "POST",
        body : JSON.stringify(filme), //texto JSON
        headers :  {
            "Content-Type" : "application/json;charset=UTF-8"
        }
    };
    //fetch enviando o filme a ser inserido
    fetch("../controller/filmeInserir.php", configMetodo)
        .then(function(resposta){
            if(!resposta.ok===true){
                let msg = resposta.status + " - " + resposta.statusText;
                document.querySelector('#msgErro').textContent = msg;
            }else
                return resposta.json();        
        })
        .then(function(respostaJSON){
            if(respostaJSON.erro===false)
                cbSucessoInserirFilme(respostaJSON);
            else
                document.querySelector('#msgErro').textContent = respostaJSON.msgErro;
        });
})

//Função de callback
function cbSucessoInserirFilme(respostaJSON){
    document.querySelector('#msgSucesso').textContent = respostaJSON.msgSucesso;
    setTimeout(function(){
        window.location.href = "../view/filmes.html";
    },3500);
}

