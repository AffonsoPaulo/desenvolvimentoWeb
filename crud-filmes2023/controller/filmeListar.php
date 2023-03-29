<?php
    require_once('../model/conexao.php');
    //Monte uma resposta na forma de matriz associativa com valores de sucesso.
    //Essa matriz deverá ser devolvida para o cliente (javascript) no formato de texto JSON
    $resposta["erro"] = false; $resposta["dados"] = null;
    $resposta["msgErro"] = ""; $resposta["msgSucesso"] = ""; 
    try{
        $sql = "SELECT f.*,g.descricao as genero_descricao FROM filmes_assistidos f 
        JOIN generos g ON(f.genero_id=g.id) ORDER BY titulo";
        $stmt = $conexao->prepare($sql);
        $stmt->execute();
        $resposta["dados"] = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $resposta["msgSucesso"] = "Filmes listados com sucesso!";
    }catch(PDOException $e){
        $resposta["erro"] = true;
        $resposta["msgErro"] = "Erro ao listar filmes. ".$e->getMessage();
    }finally{
        echo json_encode($resposta);
    }
?>