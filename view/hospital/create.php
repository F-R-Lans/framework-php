<?php
	if ($patientsPage === true){
?>
		<form action="<?= URL ?>hospital/createNewPatients" method='POST'>
 			<p>Patient name</p><input type='text' name='patientName'><br>
			<p>select species</p><select name="species">
		<?php
		foreach ($species as $species) {
		?>
        	<option value="<?= $species["species_id"] ?>"><?= $species["species_description"] ?></option>
		<?php
    }
		?>
 	 		</select><br>
 	 	<p>Choose Gender</p>
 	 	Male<input type="radio" name="gender" value="1" checked>
 	 	Female<input type="radio" name="gender" value="2" >
 	 	Other/Undisclosed<input type="radio" name="gender" value="3" ><br>
 	 		<p>Select Client</p><select name="clients">
		<?php
		foreach ($clients as $client) {
		?>
        	<option value="<?= $client["client_id"] ?>"><?= $client["client_firstname"] ."&nbsp;". $client["client_lastname"] ?></option>
		<?php
    }
		?>
 	 		</select><br>
 	 		<p>Status/Abnormalities</p><textarea name="status" rows="4" cols="20"><?= $client["client_id"] ?></textarea><br>
 	 	<input type="submit" value="Create">
 	 </form>
 <?php } elseif ($clientPage === true){ ?>
 		<form action="<?= URL ?>hospital/createNewClient" method='POST'>
 			<p>First Name</p><input type='text' name='firstname'><br>
 			<p>Last Name</p><input type='text' name='lastname'><br>
 			<p>E-Mail Adress</p><input type='text' name='email'><br>
 			<p>Phone Number</p><input type='text' name='phone'><br>
 		<input type="submit" value="Create">
 	</form>
 <?php } elseif ($speciePage === true){ ?>
 		<form action="<?= URL ?>hospital/createNewSpecies" method='POST'>
 			<p>Choose Specie</p><input type='text' name='soort'><br>
 		<input type="submit" value="Create">
 	</form>
 <?php } ?>
