<?php  
	if ($_GET) {
		$raza = $_GET['raza'];
		if ($raza == 1) {
			echo "<option>Akita Black</option>
				<option>Akita Brown</option>
				<option>Akita White</option>";
		}
		if ($raza == 2) {
			echo "<option>Sabueso Black with Brown</option>
				<option>Sabueso Black</option>
				<option>Sabueso Brown</option>";
		}
		if ($raza == 3) {
			echo "<option>Podenco Langhaar</option>
				<option>Podenco Ibicenco</option>
				<option>Podenco Portugues</option>";
		}
		if ($raza == 4) {
			echo "<option>Terrier Inglesk</option>
				<option>Scottish Terrier</option>
				 <option>Terrier Escoces</option>";
		}
	}

?>