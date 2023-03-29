<?php
  require_once('../model/conexao.php');
  $filmePost = file_get_contents('php://input');
  $filmeMatriz = json_decode($filmePost, true);
  //Recupera os dados vindos da VIEW
  $titulo = (isset($filmeMatriz["titulo"]) && $filmeMatriz["titulo"] != null) 
  ? strtoupper($filmeMatriz["titulo"]) : "";
  $avaliacao = (isset($filmeMatriz["avaliacao"]) && $filmeMatriz["avaliacao"] != null) 
  ? $filmeMatriz["avaliacao"] : "";
  $generoId = (isset($filmeMatriz["genero_id"]) && $filmeMatriz["genero_id"] > 0) 
  ? $filmeMatriz["genero_id"] : "";
  //Monta a resposta padrão
  $resposta["erro"] = false; $resposta["msgErro"] = "";
  $resposta["msgSucesso"] = ""; $resposta["dados"] = null;

  if( $titulo != "" && $avaliacao != ""){
    try {
        $sql = "INSERT INTO filmes_assistidos(titulo,avaliacao,genero_id) VALUES(?,?,?)";
        //Prepara a instrução e em seguida passa os argumentos. Evita SQL Injection
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(1, $titulo );
        $stmt->bindParam(2, $avaliacao);
        $stmt->bindParam(3, $generoId); 
        $stmt->execute();
        $resposta["msgSucesso"] = "{$stmt->rowCount()} filme inserido com sucesso! O id inserido 
        foi {$conexao->lastInsertId()}"; 
    }catch(PDOException $e) {
      $resposta["erro"] = true;
      $resposta["msgErro"] = "Erro: Não foi possível efetuar a inserção no BD".$e->getMessage();
    }finally{
      echo json_encode($resposta);  
    }
  }
?>