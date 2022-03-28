<?php

    include_once("conexao.php");

    if(!empty($_FILES['arquivo']['tmp_name'])){
        $arquivo = new DomDocument();
        $arquivo->load($_FILES['arquivo']['tmp_name']);
        // var_dump($arquivo);

        $rows = $arquivo->getElementsByTagName("Row");

        $first_row = true;

        foreach($rows as $linha){
            if($first_row == false){
            $sabor = $linha->getElementsByTagName("Data")->item(0)->nodeValue;
            echo "Sabor: $sabor <br>";

            $tamanho = $linha->getElementsByTagName("Data")->item(1)->nodeValue;
            echo "Tamanho: $tamanho <br>";
 
            $preco = $linha->getElementsByTagName("Data")->item(2)->nodeValue;
            echo "Preço: $preco <br>";

            echo "<hr>";

                //inserir o usuario no bd
                $result_usuario = "INSERT INTO PIZZAS (sabor, tamanho, preco) VALUES ('$sabor', '$tamanho', '$preco')";
                $resultado_usuario = mysqli_query($conn ,$result_usuario);

            }
            $first_row = false;
        }
    }
?>