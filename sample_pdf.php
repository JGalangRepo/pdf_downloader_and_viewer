<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_samplepdf";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['submit'])){
$name = mysqli_real_escape_string($conn,$_POST['name']);
$storedFile="uploads/".basename($_FILES["file"]["name"]);
move_uploaded_file($_FILES["file"]["tmp_name"], $storedFile);

$sql = "INSERT INTO tbl_samplepdf (file_name,name_file) VALUES ('$name','$storedFile')";

if(mysqli_query($conn, $sql)){
	echo "<script type='text/javascript'>alert('Successfuly Updated!'); location.href='index.php?adding=success';</script>";
	var_dump($sql);
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}

mysqli_close($conn);

?>