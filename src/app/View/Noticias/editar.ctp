<h1>Editar de notícia</h1>

<?php
echo $this->Form->create("Noticia");

echo $this->Form->input("id");

echo $this->Form->input(
	"titulo", 
	array(
		"label" => "Título da notícia", 
		"placeholder" => "Digite algo",
		"required" => false
	)
);
echo $this->Form->input("texto");
echo $this->Form->input(
	"data", 
	array(
		"type" => "text"
	)
);
echo $this->Form->input(
	"categoria_id",
	array(
		"empty" => "Selecione uma opção"
	)
);

echo $this->Form->submit("Editar");

echo $this->Form->end();
?>