//Ao carregar a página
window.onload = function(){
    //Pegue o parâmetro id contido na query string da url
    let qs = window.location.search.replace('?','');
    let parametrosBuscar = qs.split('=');
    let id = parametrosBuscar[1];
    buscarFilme(id);   
}

function buscarFilme(id){  
    //fetch enviando o id do filme a ser recuperado
    fetch("../controller/filmeBuscar.php?id="+id+"")
        .then(function(resposta){
            if(!resposta.ok===true){
                let msg = resposta.status + " - " + resposta.statusText;
                document.querySelector('#msgErro').textContent = msg;
            }else
                return resposta.json();        
        })
        .then(function(respostaJSON){
            if(respostaJSON.erro===false)
                cbSucessoBuscarFilme(respostaJSON);
            else
            document.querySelector('#msgErro').textContent = respostaJSON.msgErro;
            return respostaJSON.dados.genero_id;
        }) //Grande vantagem de se trabalhar com promise
        .then(function(idGeneroAtual){
            buscarEposicionarGeneros(idGeneroAtual);
        })
        .catch(function(erro){
            document.querySelector('#msgErro').textContent = erro;
        });
}
//Função de callback
function cbSucessoBuscarFilme(respostaJSON){
    let filme = respostaJSON.dados;
    //Preencha os inputs com os dados trazidos
    document.querySelector('#id').value = filme.id;
    document.querySelector('#titulo').value = filme.titulo;
    document.querySelector('#avaliacao').value = filme.avaliacao;
}

function buscarEposicionarGeneros(idGeneroAtual){
    fetch("../controller/generoListar.php")
        .then(function(resposta){
            if(!resposta.ok===true){
                let msg = resposta.status + " - " + resposta.statusText;
                document.querySelector('#msgErro').textContent = msg;
            }else
                return resposta.json();        
        })
        .then(function(respostaJSON){
            if(respostaJSON.erro===false){
                cbSucessoListarGeneroBuscar(respostaJSON,idGeneroAtual);
                document.querySelector('#msgSucesso').textContent = respostaJSON.msgSucesso;
                setTimeout(function(){
                    document.querySelector('#msgSucesso').textContent = "";
                },2500);
            }else
                document.querySelector('#msgSucesso').textContent = respostaJSON.msgErro;
        })
        .catch(function(erro){
            document.querySelector('#msgErro').textContent = erro;
        });
}

//Callback de listarGenero p/ inserir 
function cbSucessoListarGeneroBuscar(respostaJSON,idGeneroAtual){
    console.log("id", idGeneroAtual)
    let generos = respostaJSON.dados;
    if(generos!=null)
        montarSelectGeneros(generos,idGeneroAtual);
}

function montarSelectGeneros(generos, idGeneroAtual){
    for (const i in generos) {
        let genero = generos[i];
        let $opt = document.createElement('option');
        $opt.value= genero.id;
        if(genero.id == idGeneroAtual)
            $opt.setAttribute('selected', 'selected');
        $opt.textContent = genero.descricao;
        document.querySelector('#cmbGeneros').appendChild($opt);
    }
}
