<?php
require_once 'model/Conta.php';

class ContaPoupanca extends Conta
{

	public function depositar($valor, $numeroConta)
	{
		if($this->numeroConta == $numeroConta && $this->valor > 0) {
			echo "Deposito realizado com sucesso! ";
		} else {
			echo "Dados incorretos, tente novamente. ";
		}
	}

	public function saque($saldo, $valor)
	{

	}

}
