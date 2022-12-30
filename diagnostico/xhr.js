// const formAluno = document.querySelector("form");
// formAluno.addEventListener("submit", (e) => {
//     e.preventDefault();
//     let aluno = {
//         nome: document.querySelector("#nome").value,
//         notaUm: parseFloat(document.querySelector("#nota1").value),
//         notaDois: parseFloat(document.querySelector("#nota2").value)
//     };
//     const xhr = new XMLHttpRequest();
//     xhr.open("POST", "processaAluno.php");
//     xhr.setRequestHeader("Content-Type","application/json;charset=UTF-8");
//     xhr.send(JSON.stringify(aluno));
//
//     xhr.onreadystatechange = () => {
//         console.log("Estado atual...", xhr.readyState)
//         if(xhr.readyState === 4) {
//             if(xhr.status === 200 || xhr.status === 304) {
//                 let alunoJSON = JSON.parse(xhr.responseText)
//                 preencheSpan(alunoJSON)
//             } else {
//                 limpaSpan()
//                 let msgError = xhr.status + " - " + xhr.statusText
//                 document.querySelector("#erro").textContent = msgError
//             }
//         }
//     }
// })
//
// const limpaSpan = () => {
//     document.querySelector("#dados").textContent = "";
//     document.querySelector("#alunoNome").textContent = "";
//     document.querySelector("#alunoMedia").textContent = "";
//     document.querySelector("#alunoGrau").textContent = "";
// }
//
// const preencheSpan = aluno => {
//     document.querySelector("#dados").textContent = "Informações do Aluno";
//     document.querySelector("#alunoNome").textContent = "Nome: " + aluno.nome;
//     document.querySelector("#alunoMedia").textContent = "Média: " + aluno.media;
//     document.querySelector("#alunoGrau").textContent = "Grau: " + aluno.grau;
// }