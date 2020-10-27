<?php 

include 'connection.php';

$sql = "SELECT * FROM tbl_samplepdf";
$query = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($query);

$filename = $row['name_file'];
var_dump($filename);
header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' . $filename . '"');
header('Content-Transfer-Encoding: binary');
header('Pragma: no-cache');
header('Expires: 0');
exit();

?>