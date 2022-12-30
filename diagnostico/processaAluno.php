<?php
    require_once "alunoFunc.php";
    $aluno = file_get_contents("PHP://input");
    $aluno = json_decode($aluno, true);
    $aluno["media"] = obterMedia($aluno["notaUm"], $aluno["notaDois"]);
    $grau = "";
    preencherGrau($aluno["media"], $grau);
    $aluno["grau"] = $grau;
    //print_r($aluno);
    echo json_encode($aluno);
