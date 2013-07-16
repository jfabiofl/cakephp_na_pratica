<?php

class Noticia extends AppModel{

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

	public $belongsTo = array(
		"Categoria" => array(
			"order" => "nome ASC"
		)
	);

	public function beforeValidate(){
		echo "Validação";
		debug($this->data);
	}

	public function beforeSave(){
		echo "Salvar";
		debug($this->data);
		die();
	}
	
}