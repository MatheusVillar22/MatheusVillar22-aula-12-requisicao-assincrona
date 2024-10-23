<?php
header('content -Type: application/json');

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];

    $soma = $numero1 + $numero2;

    echo json_encode(['soma' =>soma]);
}else{
    echo json_encode(['erro' => 'Metodo não suportado. Use o POST']);
}
?>