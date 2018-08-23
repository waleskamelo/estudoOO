<?php
require_once 'model/ContaCorrente.php';
require_once 'model/ContaPoupanca.php';
require_once 'model/Conta.php';

/*$conta  = new ContaPoupanca($titular = 'waleska', $agencia = 1234);
$conta->depositar($valor = 50 + $valor = 100);
echo '</br> Saldo: R$ ' . $conta->getSaldo();
$conta->saque($valor = 80);
echo '</br> Saldo: R$ ' . $conta->getSaldo();*/

$conta = new ContaCorrente($titular = 'waleska', $agencia = 1234);
$conta->depositar($valor = 80);
echo '</br> Saldo: R$ ' . $conta->getSaldo();
$conta->saque($valor = 30);
echo '</br> Saldo: R$ ' . $conta->getSaldo();
