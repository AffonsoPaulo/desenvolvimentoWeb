const formAluno = document.querySelector("form");
formAluno.addEventListener("submit", (e) => {
    e.preventDefault();
    let aluno = {
        nome: document.querySelector("#nome").value,
        notaUm: parseFloat(document.querySelector("#nota1").value),
        notaDois: parseFloat(document.querySelector("#nota2").value)
    };
    fetch("processaAluno.php", {
        method: "POST",
        body: JSON.stringify(aluno),
        headers: {
            "Content-Type":"application/json;charset=UTF-8"
    }
    })
        .then(resposta => {
            console.log(resposta)
            if(resposta.ok !== true) {
                limpaSpan()
                document.querySelector("#erro").textContent = resposta.status + " - " + resposta.statusText
            } else {
                return resposta
            }
        })
        .then(resposta => resposta.json())
        .then(aluno => {
            preencheSpan(aluno)
        })
        .catch(erro => console.log("Deu merda", erro))

})

const limpaSpan = () => {
    document.querySelector("#dados").textContent = "";
    document.querySelector("#alunoNome").textContent = "";
    document.querySelector("#alunoMedia").textContent = "";
    document.querySelector("#alunoGrau").textContent = "";
}

const preencheSpan = aluno => {
    document.querySelector("#dados").textContent = "Informações do Aluno";
    document.querySelector("#alunoNome").textContent = "Nome: " + aluno.nome;
    document.querySelector("#alunoMedia").textContent = "Média: " + aluno.media;
    document.querySelector("#alunoGrau").textContent = "Grau: " + aluno.grau;
}