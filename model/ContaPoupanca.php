<?php
require_once 'model/Conta.php';

class ContaPoupanca extends Conta
{

	public function depositar($valor)
	{
		if($valor > 0) {
			$this->saldo = $this->saldo + $valor;
			echo "Deposito realizado com sucesso! ";
		} else {
			echo "Dados incorretos, tente novamente! ";
		}
	}

	public function saque($valor)
	{
		//validar o valor
		//realizar o saque
		//informar se ocorreu todo bem ou nao
		if($valor <= $this->saldo) {
			$this->saldo = $this->saldo - $valor;
			echo " </br> Saque realizado com sucesso! ";
		} else {
			echo " </br> Saldo indisponível, tente novamente! ";
		}
	}
}
