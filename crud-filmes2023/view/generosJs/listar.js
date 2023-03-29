window.onload = () => {
    generoListarFetch()
}
let generoListarFetch = function() {
    document.querySelector('tbody').innerHTML = '';
    fetch("../controller/generoListar.php")
        .then(function(resposta){
            if (! resposta.ok===true){
                let msg = resposta.status + " - " + resposta.statusText;
                throw new Error(msg)
            } else
                return resposta.json();
        })
        .then(function(respostaJSON){
            if(respostaJSON.erro === false)
                cbSucessoListarGenero(respostaJSON);
            else
                cbErroListarGenero(respostaJSON.msgErro)
        })
        .catch(function(erro){
            document.querySelector('#msgErro').textContent = erro;
        })
}

//Função de callback
function cbSucessoListarGenero(respostaJSON){
    montarTabela(respostaJSON.dados);
}

function cbErroListarGenero(erro) {
    document.querySelector('#msgErro').textContent = erro;
}

//Esta função cria as linhas da tabela com os dados (gerenros) recebidos da CONTROLLER
function montarTabela(dados){
    for (const i in dados) {
        let genero = dados[i];
        const $tr = document.createElement('tr');
        //p/ cada atributo faça
        criarTDePendurar($tr, genero.id, false);
        criarTDePendurar($tr, genero.descricao, false);
        // let links = "<a href=generoFormBuscar.html?id="+genero.id+">[Editar]</a>";
        let links = "<a href=#  '>[Editar]</a>";
        links+= "<a href=#  '>[Excluir]</a>"
        criarTDePendurar($tr, links, true);
        //Pendura a linha criada a cada iteração no tbody da tabela
        document.querySelector('tbody').appendChild($tr);
    }//Fim do for in
}//Fim da função

//Lógica de exclusão de um gênero. A função excluirGenero está em generosjs/excluir.js
const $corpoTabela = document.querySelector('tbody');
$corpoTabela.addEventListener('click',function(event){
    if(event.target.tagName==='A'){
        let link = event.target;
        let generoId = obterValorDaColunaId(link);
        if(generoId > 0 && link.textContent === "[Excluir]")
            generoExcluirFetch(generoId);
        else if(generoId > 0 && link.textContent === "[Editar]")
            generoBuscarFetch(generoId);
    } 
});
function obterValorDaColunaId(link){
    if(link.textContent === "[Excluir]" || link.textContent === "[Editar]"){
        //parentNode = nó pai
        let coluna = link.parentNode;
        let linha = coluna.parentNode;
        //firstChild = primeiro filho
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
