fetch("../controller/filmeListar.php")
    .then(function(resposta){
        if(!resposta.ok===true){
            let msg = resposta.status + " - " + resposta.statusText;
            document.querySelector('#msgErro').textContent = msg;
        }else
            return resposta.json();        
    })
    .then(function(respostaJSON){
        if(respostaJSON.erro===false)
            cbSucessoListarFilme(respostaJSON);
        else
            document.querySelector('#msgErro').textContent = respostaJSON.msgErro;
    })
    .catch(function(erro){
        document.querySelector('#msgErro').textContent = erro;
    });

function montarTabela(dados){
    for (const i in dados) {
        let filme = dados[i];
        const $tr = document.createElement('tr');
        //p/ cada atributo faça
        criarTDePendurar($tr, filme.id , false);
        criarTDePendurar($tr, filme.titulo , false);
        criarTDePendurar($tr, filme.avaliacao , false);
        criarTDePendurar($tr, filme.genero_descricao , false);
        let links = "<a href=filmeFormBuscar.html?id="+filme.id+">[Editar]</a>";
        links+= "<a href=#  >[Excluir]</a>" 
        criarTDePendurar($tr, links , true);
        //Pendura a linha criada a cada iteração no tbody da tabela
        document.querySelector('tbody').appendChild($tr);
    }//Fim do for in
}//Fim da função
const $corpoTabela = document.querySelector('tbody');
$corpoTabela.addEventListener('click',function(event){
    if(event.target.tagName==='A'){
        let link = event.target;
        let filmeAExcluir = obterValorDaColunaId(link);
        if(filmeAExcluir>0)
            excluirFilme(filmeAExcluir); //Função contida em excluir.js
    }  
});

function obterValorDaColunaId(link){
    if(link.textContent === "[Excluir]"){
        let coluna = link.parentNode;
        let linha = coluna.parentNode;
        let idText = linha.firstChild;
        return parseInt(idText.textContent);
    }
    return null;
}

function criarTDePendurar(noPai, informacao, ehHtml){
    let td = document.createElement('td');
    if(ehHtml)
        td.innerHTML = informacao;
    else
        td.textContent = informacao;
    noPai.appendChild(td);
}

//Função de callback
function cbSucessoListarFilme(respostaJSON){
    montarTabela(respostaJSON.dados);
}





       