<html>
<head>
<title>Video Tutorial by CikguFadzli</title>
</head>
<body>
<h2>List of Students</h2>
<!-- content goes here -->
<?php
// create connection
$con=mysqli_connect("localhost","root","","unisza");

// SQL Query
$sql = "SELECT * FROM student";
$result = mysqli_query($con,$sql);

// Fecth data
echo "<table border=1>";
echo "<tr><td>Name</td><td>IC</td><td>State</td></tr>";
while($row = mysqli_fetch_array($result)){
	$w = $row['studentid'];
	$x = $row['name'];
	$y = $row['icnum'];
	$z = $row['state'];
	echo "<tr><td>$x</td><td>$y</td><td>$z</td></tr>";	
}
echo "</table>";
?>
</body>
</html>
