<?php
class NoticiasController extends AppController {

	public $components = array('Security');

	public function beforeFilter(){
		parent::beforeFilter();
		$this->Security->blackHoleCallback = 'blackhole';
	}

	public function add() {

		$categorias = $this->Noticia->Categoria->find(
			"list",
			array(
				"fields" => array(
					"id",
					"nome"
				)
			)
		);
		$this->set(compact("categorias"));

		if($this->request->is("post")){

			if($this->Noticia->save($this->data)){
				$this->Session->setFlash("Notícia cadastrada com sucesso.");
				$this->redirect(array("controller" => "noticias", "action" => "index"));
			}else{
				$this->Session->setFlash("Erro, notícia não cadastrada.");
			}

		}
	}

	public function index(){
		$dados = $this->Noticia->find("all");
		$this->set(compact("dados"));
	}

	public function editar($id = null) {
		$this->Noticia->create();
		$this->Noticia->id = $id;
		if(!$this->Noticia->exists()){
			$this->Session->setFlash("Essa notícia não existe.");
			$this->redirect(array("action" => "index"));
		}
		if($this->request->is("post") || $this->request->is("put")){
			if($this->Noticia->saveAssociated($this->data)){
				$this->Session->setFlash("Notícia alterada.");
				$this->redirect(array("action" => "index"));
			}else{
				$this->Session->setFlash("Erro na validação.");
			}
		}else{
			$this->request->data = $this->Noticia->findById($id);
		}
	}

	public function blackhole($type){
		var_dump($type);
		die();
	}

}