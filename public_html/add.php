<?php
include_once("config.php");
?>

<html>

	<head>
  	<title>Registration</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
<body>
	<?php
	/*$sql = "select * from Mahasiswa";
		if($row = mysqli_fetch_assoc(mysqli_query($mysqli, $sql))) {
			echo "<p>firstname: ".$row['firstname']."</p>";
			echo "<p>lastname: ".$row['lastname']."</p>";
		}*/

//	if(isset($_POST['submit'])) {

		$name = $_POST["name"];		
		$email = $_POST["email"];
		$pwd = $_POST["pwd"]; 
		$q = "insert into mahasiswa (name, email, pwd) values ('".$name."','".$email."', '".$pwd."')";
		if(!$conn->query($q)){ echo die("err");}else{echo "success";}

		$sql = "SELECT name, email FROM mahasiswa";

		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
   		 // output data of each row
    		while($row = $result->fetch_assoc()) {
        	echo "Nama: " . $row["name"]. " - Email: " . $row["email"]. "<br>";}
		} else {
   		echo "0 results";}
		$conn->close();			

		/*if(!mysqli_query($mysqli, $q)) {
			die("<p>failed insert</p>");
		}
		echo "<p>insert success</p>";

		$sql = "select * from Mahasiswa";
		if($row = mysqli_fetch_assoc(mysqli_query($mysqli, $sql))) {
			echo "<p>name: ".$row['firstname']."</p>";
			echo "<p>surename: ".$row['lastname']."</p>";
		}*/
//	}
	?>
</body>
</html>
