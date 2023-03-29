<?php
    require_once('../model/conexao.php');
    //Monte uma resposta na forma de matriz associativa com valores de sucesso.
    //Esta matriz deverá ser devolvida para o cliente (javascript) no formato de texto JSON
    $resposta["erro"] = false;$resposta["dados"] = null;
    $resposta["msgErro"] = "";$resposta["msgSucesso"] = ""; 
    //Tente executar o comando de consulta na referida tabela
    try{
        $sql = "SELECT * FROM generos ORDER BY descricao";
        $stmt = $conexao->prepare($sql);
        $stmt->execute();
        //Em caso de sucesso, envie as linhas da tabela pelo atributo dados de $resposta
        //Esses dados deverão estar no formado de matriz associativa (PDO::FETCH_ASSOC)
        $resposta["dados"] = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //Envie também uma mensagem de sucesso
        $resposta["msgSucesso"] = "Generos listados com sucesso!";
    }catch(PDOException $e){
        //Em caso de erro, sinalize o erro e crie uma mensagem de erro
        $resposta["erro"] = true;
        $resposta["msgErro"] = "Erro ao listar generos. ".$e->getMessage();
    }finally{
        //Devolva a resposta para o cliente no formato de texto JSON
        echo json_encode($resposta);
    }
?>
