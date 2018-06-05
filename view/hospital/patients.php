<h2>Patiënts</h2>
	<table id="myTable">
		<thead>
			<tr>
				<th onclick="sortTable(0)">Name</th>
				<th onclick="sortTable(1)">Species</th>
				<th onclick="sortTable(2)">gender</th>
				<th onclick="sortTable(3)">Status</th>
				<th onclick="sortTable(4)">Client</th>
			</tr>
		</thead>
		</tbody>
<?php
			foreach ($patients as $patient) {
				?>
				<tr>
					<td><?= $patient["patient_name"]?></td>
					<td><?= $patient["species_description"]?></td>
					<td><?= $patient["gender_description"]?></td>
					<td><?= $patient["patient_status"]?></td>
					<td><?= $patient["client_firstname"] . "&nbsp" . $patient["client_lastname"]?></td>
				</tr>
				<?php
			}
				 ?>
		 </tbody>
		</table>

		<a href="<?= URL ?>hospital/createPatients">create new patient</button></a>
