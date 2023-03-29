<?php
  require_once('../model/conexao.php');
  $generoDelete = file_get_contents('php://input');
  $generoMatriz = json_decode($generoDelete, true);
  $id = (isset($generoMatriz["id"]) && $generoMatriz["id"] != null) ? $generoMatriz["id"] : null;
  $resposta["erro"] = false;$resposta["msgErro"] = "";
  $resposta["msgSucesso"] = "";$resposta["dados"] = null;
  if( $id != null ){
    try {
        $sql = "DELETE FROM generos WHERE id=?";
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(1,$id);
    
        $stmt->execute();
        $resposta["msgSucesso"] = "Genero de id $id excluído com sucesso!";
    }catch(PDOException $e) {
      $resposta["erro"] = true;
      $resposta["msgErro"] = "Erro ao excluir gênero. ".$e->getMessage();
    }finally{
        echo json_encode($resposta);  
        exit();
    }
  }
?>