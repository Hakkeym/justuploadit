<?php 

session_start();
if (!isset($SESSION['email'])) {
	 header('location: index.php');
}


if (isset($_POST['submit'])) {
	$folder= "uploads/";
	$imageName= $_FILES['image']['name'];
	$imageSize= $_FILES['image']['size'];
	$imageTmp= $_FILES['image']['tmp_name'];
	$imageExt= pathinfo($imageName, PATHINFO_EXTENSION);
	$imagePath= $folder.$imageName;

	$Tel_number = $_POST['Tel_number'];
	$city=  $_POST['city'];
	$price=  $_POST['price'];


	$extension= array('jpg', 'jpeg', 'png', 'avi', 'gif');





	if (!in_array($imageExt, $extension)) {
		echo "only jpg, jpeg, png, avi, gif files are allowed";
	}

	elseif ($Tel_number=='') {
		echo "please enter the telephone number";
}

	elseif ($city=='') {
		echo "please enter the city";
		}

	elseif ($price=='') {
		echo "please enter price";
	}
	elseif ($imageName=='') {
		echo "please select your image";
	}

	
	else{
		$upload= move_uploaded_file($imageTmp, $imagePath);
		if ($upload) {
			echo "upload";
			
	$conn= mysqli_connect('localhost', 'root', '', 'adminlogin');
	$query= "insert into carbase values('', '$Tel_number', '$city', '$price', '$imagePath')";
	$dbc= mysqli_query($conn, $query);
	if($dbc){
		echo " successful";
	}
	else{
		echo mysqli_error($connection);
	}
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
	<title></title>

</head>
<body>

	<div class="container">
		<h1>upload image</h1>

		<form method="post" action="" enctype="multipart/form-data">
			<h1>select image for car category</h1>

			<input type="file" name="image">

		<input type="text" name="Tel_number" class="form-control" placeholder="enter the telephone number">
		<input type="text" name="city" class="form-control" placeholder="enter the city">
		<input type="text" name="price" class="form-control" placeholder="enter the price">
		<input type="submit" name="submit"><br><br><br>
	</form>

<center><a href="adm2.php" button class="btn btn-block">CLICK TO UPLOAD PICTURES OF CLOTHES CATEGORY</a>

























</body>
</html>