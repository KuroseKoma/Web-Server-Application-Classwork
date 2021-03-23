<!DOCTYPE html>
<html>
<head>
	<title>Pokemon Database
	</title>
	<?php require 'css.php'?>

</head>
<body>

	<div class='container'>


		<?php include 'nav.php';?>

		
<?php

	include 'config.php';



	$sql = "SELECT * FROM pokedex";
	$result = mysqli_query($connection, $sql);

	if(mysqli_num_rows($result) > 0 ){
		echo "<div class='row'>";
		while($row = mysqli_fetch_assoc($result)){
			echo "<div  class='col-3'>
			<a href='PokeStats.php?id=".$row['pokedex_number']."'><img class='items' src='".$row["icon"]."' height='30px'></a>
			<h5>".$row["pokedex_number"].". ".$row["name"]."</h5>
			<h5>Attack: ".$row["attack"]."</h5>
			<h5>Defense: ".$row["defense"]."</h5>
			<h5>HP:".$row["hp"]."</h5>
			<h5>Speed:".$row["speed"]."</h5>
		<a href='update.php?id=".$row['pokedex_number']."'>Update</a>
		<a href='delete.php?id=".$row['pokedex_number']."&name=".$row['name']."'>Delete</a></div>";

	}
	echo "</div>";
}



/*
	if(mysqli_num_rows($result) > 0 ){
		echo "<table border='1' class='col-12'>
				<tr><th></th><th>Pokedex Number</th><th>Pokemon</th><th>Attack</th><th>Defence</th><th>HP</th><th>Speed</th><th>Modify</th><tr>";
				while($row = mysqli_fetch_assoc($result)){
				echo "<tr><td><a href='PokeStats.php?id=".$row['pokedex_number']."'><img class='items' src='".$row["icon"]."' height='30px'></a></td><td>".$row["pokedex_number"]."</td><td>".$row["name"]."</td><td>".$row["attack"]."</td><td>".$row["defense"]."</td><td>".$row["hp"]."</td><td>".$row["speed"]."</td><td>
<a href='update.php?id=".$row['pokedex_number']."'>Update</a>//
<a href='delete.php?id=".$row['pokedex_number']."&name=".$row['name']."'>Delete</a>
				</td><tr>";
			}
		echo "</table>";
	}

*/
mysqli_close($connection);






?>
</div>	
</div>
</body>
</html>