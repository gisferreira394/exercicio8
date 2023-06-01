<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        Soma
        <input type="number" name="soma">
        <input type="number" name="somaa">
        <button type="submit" name="Verificar">Converta</button>
    </form>


    
    <?php

$n1;
$n2;

if(isset($_POST["Verificar"])){
    $n1 = $_POST["soma"];
    $n2 = $_POST["somaa"];
$resultado = ($n1+$n2);

}

echo "Soma é " . $resultado;

    ?>
</body>
</html>