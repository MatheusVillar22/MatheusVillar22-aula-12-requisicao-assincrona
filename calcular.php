<?php
header('Content-Type: application/json');

// Recebe os dados da requisição
$data = json_decode(file_get_contents("php://input"), true);

$larguraComodo = $data['larguraComodo'];
$comprimentoComodo = $data['comprimentoComodo'];
$larguraPiso = $data['larguraPiso'];
$comprimentoPiso = $data['comprimentoPiso'];
$margemExtra = isset($data['margemExtra']) ? $data['margemExtra'] / 100 : 0;

// Calcula as áreas
$areaComodo = $larguraComodo * $comprimentoComodo;
$areaPiso = $larguraPiso * $comprimentoPiso;

// Calcula a quantidade necessária de pisos
$quantidadePisos = $areaComodo / $areaPiso;

// Inclui a margem extra
$quantidadeTotal = ceil($quantidadePisos * (1 + $margemExtra));

// Retorna o resultado
echo json_encode(["quantidadeTotal" => $quantidadeTotal]);
