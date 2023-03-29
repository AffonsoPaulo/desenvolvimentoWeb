//Recupera o elemento (Também poderíamos usar o form e o evento submit)        
const $btnEnviar = document.querySelector('#enviar');
$btnEnviar.addEventListener('click', function(event) {
    event.preventDefault();
    generoInserirFetch();
    $("#modal-formulario").modal('hide');
});

let generoInserirFetch = function () {
    let genero = {
        "descricao": document.querySelector('#descricao').value,
    };
    let configMetodo = {
        method: "POST",
        body: JSON.stringify(genero),
        headers: {"Content-Type": "application/json;charset=UTF-8"}
    };

    //fetch enviando o genero a ser inserido
    fetch("../controller/generoInserir.php", configMetodo)
        .then(function(resposta){
            if(!resposta.ok===true){
                let msg = resposta.status + " - " + resposta.statusText;
                throw new Error(msg);
            }
            else
                return resposta.json();
        })
        .then(function(respostaJSON){
            if(respostaJSON.erro===false)
                cbSucessoInserirGenero(respostaJSON);
            else
                cbErroInserirGenero(respostaJSON.msgErro);
        })
        .catch(function(erro){
            cbErroInserirGenero(erro);
        });
}

function limparSpans() {
    document.querySelector('#msgErro').textContent = '';
    document.querySelector('#msgSucesso').textContent = '';
}
//Função de callback
function cbSucessoInserirGenero(respostaJSON){
    document.querySelector('#msgSucesso').textContent = respostaJSON.msgSucesso;
    setTimeout(function(){
        limparSpans()
        generoListarFetch()
    },1500);
}

function cbErroInserirGenero(erro) {
    document.querySelector('#msgErro').textContent = erro;
    setTimeout(function() {
        limparSpans()
        generoListarFetch()
    }, 1500)
}
