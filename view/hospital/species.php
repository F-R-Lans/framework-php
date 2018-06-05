<table>
	<thead>
		<tr>
			<th>Description</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	<tbody>
	<?php
		foreach ($species as $Specie) {
	?>
		<tr>
			<td><?= $Specie["species_description"] ?></td>
			<td class="center"><a href="<?= URL ?>hospital/editSpeciesPage/<?= $Specie["species_id"] ?>">edit</a></td>
			<td class="center"><a href="<?= URL ?>hospital/deleteSpecies/<?= $Specie["species_id"] ?>">delete</a></td>
		</tr>
	<?php } ?>
	</tbody>
</table>
	<a href="<?= URL ?>hospital/createSpecies"><button type="button">create new species</button></a>
