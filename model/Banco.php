<?php

class Banco
{

	protected $contas = [
		2468 => [
			'senha' = 8642,
			'titular' = jose,
			'saldo' = 100,
			'agencia' = 1357
		]
	];

	public function acessarConta()
	{
		if(isset($contas)){
			echo 'Acesso a conta permitido'
		} else {
			echo 'Acesso a conta negado.';
		}
	}
}
