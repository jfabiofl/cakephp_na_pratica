<?php
class NoticiasController extends AppController {

	public function index() {

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

}