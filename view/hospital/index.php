<h2>Patiënts</h2>
	<table id="myTable">
		<thead>
			<tr>
				<th onclick="sortTable(0);" >Name</th>
				<th onclick="sortTable(1);" >Species</th>
				<th onclick="sortTable(2);" >gender</th>
				<th onclick="sortTable(3);" >Status</th>
				<th onclick="sortTable(4);" >Client</th>
			</tr>
		</thead>
		<tbody>
<?php
/*he foreach loop is used to loop through each key/value pair in an array.
foreach ($array as $value) {
    code to be executed;
}
For every loop, the value of the current array element is assigned to $value and the array moves once, until it reaches the last array element.
*/
foreach ($patients as $patient) {
	?>
			<tr>
				<td><?= $patient["patient_name"] ?></td>
				<td><?= $patient["species_description"] ?></td>
				<td><?= $patient["gender_description"] ?></td>
				<td><?= $patient["patient_status"] ?></td>
				<td><?= $patient["client_firstname"] ."&nbsp;". $patient["client_lastname"] ?></td>
			</tr>

<?php } ?>
		</tbody>
	</table>
	<a href="<?= URL ?>hospital/createPatients"><button type="button">Create new Patient</button></a>
