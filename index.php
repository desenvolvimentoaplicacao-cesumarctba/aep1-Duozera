<?php

require_once 'conta.php';

$murilo = new Conta(1000, 500);



echo $murilo->getSaldo();

$murilo->depositar(400);

echo "<br>";
echo $murilo->getSaldo();

echo "<br>";

$murilo->sacar(5500);

echo "<br>";

$murilo->emprestar(1500);

echo "<br>";

$murilo->emprestar(900);
