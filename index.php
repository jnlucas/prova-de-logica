<?php
ini_set('display_errors',1);
include_once 'entity/Pergaminho.php';
include_once 'controller/ExercicioController.php';

$exercicio = new ExercicioController();
$texto = $exercicio->ordenacao();

echo "Exercicio 1: ".sizeof($exercicio->getGeneriques());
echo "Exercicio 2: "."verbos:" .sizeof($exercicio->getVerbos());

echo "Exercicio 2: "."verbos Primeira pessoa:" .sizeof($exercicio->getVerbosPrimeiraPessoa($exercicio->getVerbos()));

?>