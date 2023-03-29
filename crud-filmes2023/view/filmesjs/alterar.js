//Recupera o botão alterar (Também poderíamos usar o form e o evento submit)        
const $btnAlterar = document.querySelector('#alterar');
$btnAlterar.addEventListener('click', function(event){
    event.preventDefault();
    //Monta um objeto filme recuperando os elementos do DOM
    let filme = {
        "id": document.querySelector('#id').value,
        "titulo": document.querySelector('#titulo').value,
        "avaliacao" : parseFloat(document.querySelector('#avaliacao').value),
        "genero_id" : parseInt(document.querySelector('#cmbGeneros').value)
    };
    let configMetodo = {
        method : "PUT",
        body : JSON.stringify(filme), //texto JSON
        headers :  {"Content-Type" : "application/json;charset=UTF-8"}
    }
    //fetch enviando o filme a ser alterado
    fetch("../controller/filmeAlterar.php", configMetodo)
        .then(function(resposta){
            if(!resposta.ok===true){
                let msg = resposta.status + " - " + resposta.statusText;
                document.querySelector('#msgErro').textContent = msg;
            }else
                return resposta.json();        
        })
        .then(function(respostaJSON){
            if(respostaJSON.erro===false)
                cbSucessoAlterarFilme(respostaJSON);
            else
            document.querySelector('#msgErro').textContent = respostaJSON.msgErro;
        })
        .catch(function(erro){
            document.querySelector('#msgErro').textContent = erro;
        });
});

//Recupera o botão cancelar
const $btnCancelar = document.querySelector('#cancelar');
$btnCancelar.addEventListener('click',function(){
    if(confirm('Deseja mesmo cancelar a alteração?'))
        window.location.href = "../view/filmes.html";
})
//Função de callback
function cbSucessoAlterarFilme(respostaJSON){
    document.querySelector('#msgSucesso').textContent = respostaJSON.msgSucesso;
    setTimeout(function(){
       window.location.href = "../view/filmes.html";
    },3500);
}