<?php
require_once "conexao.php";

$products = [
    ['descricao' => 'Doritos', 'precoCusto' => 8.99, 'estoque' => 25],
    ['descricao' => 'Chocolate Milka', 'precoCusto' => 11.99, 'estoque' => 40],
    ['descricao' => 'Chiclete Trident', 'precoCusto' => 1.50, 'estoque' => 120],
    ['descricao' => 'Coca-Cola 310ml', 'precoCusto' => 4.50, 'estoque' => 150],
    ['descricao' => 'Guaraviton Ginseng', 'precoCusto' => 2.99, 'estoque' => 100],
    ['descricao' => 'Paçoca', 'precoCusto' => 0.50, 'estoque' => 300],
    ['descricao' => 'Batata Palha', 'precoCusto' => 4.99, 'estoque' => 360],
    ['descricao' => 'Guaravita', 'precoCusto' =>0.70, 'estoque' => 400],
    ['descricao' => 'Iogurte', 'precoCusto' => 3.50, 'estoque' => 50],
    ['descricao' => 'Heineken', 'precoCusto' => 4.99, 'estoque' => 75]
];

$sqlCommand = "INSERT INTO produto(descricao, precoCusto, estoque)";

    try {
        foreach ($products as $value) {
            $return = $connection -> exec($sqlCommand."VALUES('$value[descricao]', $value[precoCusto], $value[estoque])");
        }
        echo "Sucesso ao inserir.";
} catch (PDOException $e) {
        echo "Erro ao tentar inserir.".$e->getMessage();
    }
