<?php

abstract class Conta
{
	protected $titular;
	protected $agencia;
	protected $saldo = 0;

	public function __construct($titular, $agencia)
	{
		$this->titular = $titular;
		$this->agencia = $agencia;
	}

	abstract public function saque($valor);

	public function getSaldo()
	{
		return $this->saldo;
	}

	public function setSaldo()
	{
		$this->saldo = $saldo;
	}
}
