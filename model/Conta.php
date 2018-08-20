<?php

abstract class Conta
{
	protected $titular;
	protected $agencia = 123;
	protected $numeroConta = 123456;
	protected $saldo = 500;
	protected $valor;

	public function __construct($titular, $agencia, $numeroConta)
	{
		$this->titular = $titular;
		$this->agencia = $agencia;
		$this->numeroConta = $numeroConta;
	}

	abstract public function saque($saldo, $valor);

	public function getSaldo()
	{
		return $this->saldo;
	}

	public function setSaldo()
	{
		$this->saldo = $saldo;
	}

	public function getTipoConta()
	{
		return $this->tipoconta;
	}

	public function setTipoConta()
	{
		$this->tipoConta = $tipoConta;
	}

	public function getValor()
	{
		return $this->valor;
	}

	public function setValor()
	{
		$this->valor = $valor;
	}
}
