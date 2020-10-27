<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Sample PDF </title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<!-- ########################## UPLOAD PDF ################################# -->
	<form method="POST" action="sample_pdf.php" enctype="multipart/form-data">
	<div class="form-group">
		<label for="room_price">
            </label>
            <input type="text" name="name" id="name"  class="form-control" placeholder="Title" required="">
    </div>
    <div class="form-group">
            <input type="file" name="file" class="btn btn-default" required="">
        </div>
       <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary form-control" value="Upload">
        </div>
	</form>
	<!-- ########################## UPLOAD PDF ################################# -->
	<!-- ########################## SPACE ################################# -->
	<hr>
	<h3> DOWNLOAD PDF FILES FROM DATABASE </h3>
	<!-- ########################## DOWNLOAD PDF ################################# -->
	<?php include 'connection.php'; 
	$query = "SELECT * FROM tbl_samplepdf";
	$query_run = mysqli_query($conn, $query);
	while ($row=mysqli_fetch_assoc($query_run)) {
		
	?>
	<!-- <form method="POST" action="download_pdf.php" enctype="multipart/form-data"> -->
	<div class="form-group">
		<div class="form-group">
            <a id="downloadLink" href="<?php echo$row['name_file'];?>" target="_blank" 
			type="application/octet-stream" download="<?php echo$row['file_name'];?>" class="btn btn-primary form-control"><?php echo $row['file_name']; ?></a></p>
        </div>
	</div>
	<!-- </form> -->
	<?php
	}
	?>
	<!-- ########################## SPACE ################################# -->
	<!-- ########################## VIEW PDF ################################# -->
	<hr>
	<h3> VIEW PDF FILES FROM THE DATABASE</h3>
	<?php include 'connection.php'; 
	$query = "SELECT * FROM tbl_samplepdf";
	$query_run = mysqli_query($conn, $query);
	while ($row=mysqli_fetch_assoc($query_run)) {
	?>
	<!-- <form method="POST" action="view_pdf.php" enctype="multipart/form-data"> -->
	<div class="form-group">
		<div class="form-group">
            <a target="_blank" href="<?php echo$row['name_file'];?>" class="btn btn-primary form-control"> <?php echo $row['file_name']; ?> </a> 
        </div>
	</div>
	</form>
	<?php
	}
	?>
	<!-- ########################## viewport PDF ################################# -->
</body>
</html>