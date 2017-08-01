<?php

$serverName="localhost";
$username="mufasa";
$password="dennis";
$dbName="Tuesday";

$connection=mysqli_connect($serverName,$username,$password,$dbName);
if ($connection) {
	echo "Connection Successful!";
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Dennis</title>
</head>
<body>
	<h2>Search</h2>
	<form action="php.php" method="POST">
		
		Username: <input type="text" name="txtSearch" placeholder="enter username">
		<input type="submit" name="Submit">
	</form>

</body>
</html>



<?php

// $txtSearch=;

if (isset($_POST["txtSearch"])) {
	
	$query="SELECT * FROM records WHERE title='txtSearch'";

	$array=mysqli_query($connection,$query);

	if (mysqli_affected_rows($connection)==1) {
		echo "Movie found.";
	} else {
		echo "movie not found ";
	}
} else {
	echo "failure" .  mysqli_error($connection);
}

?>