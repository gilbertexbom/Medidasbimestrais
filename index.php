<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Calculadora Simples</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <form action='<?php $_SERVER["PHP_SELF"] ?>' method="post">
        <h1> Média Bimestral </h1>
        <br>
        <br>
        <label for="nota1">Nota 1: </label>
        <input type="number" max="10" name="nota1">
        <br>
        <br>
        <label for="nota2">Nota 2: </label>
        <input type="text" name="nota2">
        <br>
        <br>
        <label for="nota3">Nota 3: </label>
        <input type="text" name="nota3">
        <br>
        <br>
        <label for="nota4">Nota 4: </label>
        <input type="text" name="nota4">
        <br>
        <br>

        <input type="submit"> <input type="reset" value="Remover">
    </form>

    <?php

        if(isset($_POST["nota1"]) && isset($_POST["nota2"]) && isset($_POST["nota3"]) && isset($_POST["nota4"])){
        //Variáveis
        $nota1 = 0;
        $nota2 = 0;
        $nota3 = 0;
        $nota = 0;
        $media = 0;
        //Entrada
        $nota1 = $_POST["nota1"];
        $nota2 = $_POST["nota2"];
        $nota3 = $_POST["nota3"];
        $nota4 = $_POST["nota4"];
        //Processamento 
        $media = ($nota1 + $nota2 + $nota3 + $nota4)/4;
        
        if($media >= 7.5){
            //Saída
            echo "<br> <br> <br>";
            echo "<h2>", "Média Bimestral: "  .$media. "APROVADO", "</h2>";
        }
        }
        if($media < 3){
            //Saída
            echo "<br> <br> <br>";
            echo "<h2>", "Média Bimestral: "  .$media. "REPROVADO", "</h2>";
        }
        if($media >= 3 && $media < 7.5){
            //Saída
            echo "<br> <br> <br>";
            echo "<h2>", "Média Bimestral: "  .$media. "RECUPERAÇÃO", "</h2>";
        }
        

    ?>
    
</body>
</html>