<h1>Listagem de notícias</h1>

<table>
	<tr>
		<th>Título</th>
		<th>Data</th>
		<th>Ações</th>
	</tr>
	<?php
	foreach ($dados as $key => $value) {
		?>
		<tr>
			<td><?php echo $value["Noticia"]["titulo"]; ?></td>
			<td><?php echo $value["Noticia"]["data"]; ?></td>
			<td>
				<?php echo $this->Html->link("Editar", array("action" => "editar", $value["Noticia"]["id"])); ?>
			</td>
		</tr>
		<?php
	}
	?>
</table>