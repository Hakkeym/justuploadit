<?php
if (isset($_POST['submit'])) {

	$folder= "uploads/";
	$imageName= $_FILES['image']['name'];
	$imageSize= $_FILES['image']['size'];
	$imageTmp= $_FILES['image']['tmp_name'];
	$imageExt= pathinfo($imageName, PATHINFO_EXTENSION);
	$imagePath= $folder.$imageName;



	

	$extension= array('jpg', 'jpeg', 'png', 'avi', 'gif');

	if (!in_array($imageExt, $extension)) {
		echo "only jpg, jpeg, png, avi, gif, files are allowed";
	}

	


	else{
		$upload= move_uploaded_file($imageTmp, $imagePath);
		if ($upload) {
			echo "upload successful";
	

		
}
		else{
			echo "upload unsuccesful";
		}
	}
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Upload your products</title> 
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<div class="container">

<table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
<center><tr><br><br><br><br>
   <td><h1>Fill before Uploading</h1></td>

</tr><center>

<table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
<tr>
	<h4 class="h3"> NOTE: Please fill all form below, failure to do so would nullify your upload</h4><br>

	<style type="text/css">
		.h3{
			color: red;
		}
	</style>

<form method="post" action="">
<td align='center'>Name:</td>
    <td><input type='text' name='name'></td>
</tr>

<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>City:</td>
    <td><input type='text' name='city'></td>
</tr>

<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Phone Number:</td>
    <td><input type='text' name='phone_number'></td>
</tr>

<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Price:</td>
    <td><input type='number' name= 'price'></td>
</tr>
</form>


<table border='0' cellpadding='0' cellspacing='0' width='480px' align='center'><br><br>

    <form method="post" action="" enctype="multipart/form-data">

			Select Image
			<input type="file" name= "image"><br><br>
			<input type="submit" name="submit" class="btn btn-primary" value="upload">
		</form>
</tr>
</table>
 

		
	</div>

</body>
</html> 
	








