<?php

function afficherTableau($rows, $headers) {
		?>
<div class="liste">
		<table  border="1">
		    <tr>
		    <?php foreach ($headers as $header): ?>
		        <th><?php echo $header; ?></th>
		    <?php endforeach; ?>
		    </tr>

			<?php foreach ($rows as $row): ?>
			    <tr>
			    <?php for ($k = 0; $k < count($headers); $k++): ?>
			    	<?php if ($k == 0){ ?>
			    		<td><?php echo '<a href=formulaireutilisateur.php?id='.$row[$k].' >'.$row[$k].'</a>'; ?></td>
			    	<?php } else { ?>
			    		<td><?php echo $row[$k]; ?></td>
			    	<?php } ?>
			        
			    <?php endfor; ?>
			    </tr>
			<?php endforeach; ?>

		</table>
	</div>
		<?php

}

function getHeaderTable() {
	$headers = array();
	$headers[] = "ID";
	$headers[] = "Titre";
	$headers[] = "Date sortie";
	$headers[] = "Plateforme";
	$headers[] = "Developpeur";
	$headers[] = "Editeur";
	$headers[] = "Genre";
	return $headers;
}
?>