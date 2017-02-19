<?php 

class Cliente {
	public $ip;
	public $pais;
	public $estado;
	public $cidade;
	public $cep;
	public $latitude;
	public $longitude;
	public $empresa;

	public function __construct($ip,$pais,$estado,$cidade,$cep,$latitude,$longitude,$empresa){
		$this->ip = $ip;
		$this->pais = $pais;
		$this->estado = $estado;
		$this->cidade = $cidade;
		$this->cep = $cep;
		$this->latitude = $latitude;
		$this->longitude = $longitude;
		$this->empresa = $empresa;

	}
}