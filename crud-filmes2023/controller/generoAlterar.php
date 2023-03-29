<?php
  require_once('../model/conexao.php');
  $generoPut = file_get_contents('php://input');$generoMatriz = json_decode($generoPut, true);
  //id e descrição do gênero a ser alterado
  $id = (isset($generoMatriz["id"]) && $generoMatriz["id"] >0) ? $generoMatriz["id"] : null; 
  $descricao = (isset($generoMatriz["descricao"]) && $generoMatriz["descricao"] != null) 
  ? strtoupper($generoMatriz["descricao"]) : "";
  $resposta["erro"] = false; $resposta["msgErro"] = "";
  $resposta["msgSucesso"] = "";$resposta["dados"] = null;
  if( $descricao != "" && $id != ""){
    try {
        $sql = "UPDATE generos SET descricao=? WHERE id=?";
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(1, $descricao );$stmt->bindParam(2, $id);
        $stmt->execute();
        $resposta["msgSucesso"] = "{$stmt->rowCount()} genero alterado com sucesso! 
        O id do genero alterado foi {$id}"; 
    }catch(PDOException $e) {
      $resposta["erro"] = true;
      $resposta["msgErro"] = "Erro: Não foi possível efetuar a alteração no BD".$e->getMessage();
    }finally{
      echo json_encode($resposta);  
    }
  }
?>