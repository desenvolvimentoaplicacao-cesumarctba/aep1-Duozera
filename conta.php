<?php

class Conta{
	private $saldo;
	private $limite;

	public function Conta($saldo, $limite){
		$this->saldo = $saldo;
		$this->limite = $limite;
	}

	public function sacar($valor){
		if($valor <= $this->saldo){
			$this->saldo-=$valor;
		}else{
			echo "Saldo insuficiente, informe outro valor para saque.";
		}
	}
	public function depositar($valor){
		$this->saldo+=$valor;
	}

	public function emprestar($valor){
		if($this->limite >= $valor){
			$this->saldo+= $valor;
			$this->limite-=$valor;
			echo "Empréstimo realizado com sucesso. Limite atual: " . $this->limite;
		}else{
			echo "Limite indisponivel, entre em contato com a nossa agência";
		}
	}

	public function getSaldo(){
		return $this->saldo;
	}

	public function setSaldo($saldo){
		$this->saldo = $saldo;
	}

	public function getLimite(){
		return $this->limite;
	}

	public function setLimite($limite){
		$this->limite = $limite;
	}
}