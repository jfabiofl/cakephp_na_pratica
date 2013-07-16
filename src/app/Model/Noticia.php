<?php

class Noticia extends AppModel{

	//public $belongsTo = array("Categoria");

	public $validate = array(
		"titulo" => array(
			"campoVazio" => array(
				"rule" => array("notEmpty"),
				"message" => array("Esse campo não pode ficar vazio.")
			)
		)
	);

	public function vazio(){
		if(empty($this->data["Noticia"]["titulo"])){
			return false;
		}else{
			return true;
		}
	}

	public function beforeValidate(){
	}

	public function beforeSave(){
		if(!empty($this->data["Noticia"]["data"])){
			$this->data["Noticia"]["data"] = $this->formatDate($this->data["Noticia"]["data"]);
		}
	}
	
	public function afterFind($dados){
		foreach ($dados as $key => $value) {
			if(!empty($value["Noticia"]["data"])){
				$dados[$key]["Noticia"]["data"] = $this->formatDate($value["Noticia"]["data"]);
			}
		}
		return $dados;
	}

}