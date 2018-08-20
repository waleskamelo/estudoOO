<?php

abstract class Conta
{
	protected $titular;
	protected $agencia;
	protected $numeroConta;
	protected $saldo;
	protected $tipoConta;

	public function __construct($titular, $agencia, $numeroConta)
	{
		$this->titular = $titular;
		$this->agencia = $agencia;
		$this->numeroConta = $numeroConta;
	}

	abstract public function saque($numeroConta, $saldo);

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

}
