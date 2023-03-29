<?php
  require_once('../model/conexao.php');
  $filmeDelete = file_get_contents('php://input');
  $filmeMatriz = json_decode($filmeDelete, true);
  $id = (isset($filmeMatriz["id"]) && $filmeMatriz["id"] != null) ? $filmeMatriz["id"] : null;
  $resposta["erro"] = false;$resposta["msgErro"] = "";
  $resposta["msgSucesso"] = "";$resposta["dados"] = null;
  if( $id != null ){
    try {
        $sql = "DELETE FROM filmes_assistidos WHERE id=?";
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(1,$id);
        $stmt->execute();
        $resposta["msgSucesso"] = "Filme de id $id excluído com sucesso!";
    }catch(PDOException $e) {
      $resposta["erro"] = true;
      $resposta["msgErro"] = "Erro: ".$e->getMessage();
    }finally{
        echo json_encode($resposta);  
    }
  }
?>
