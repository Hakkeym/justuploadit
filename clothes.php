<!DOCTYPE html>
<html>
<head>
<title></title>
 	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">

 	<style type="text/css">

 	

	.h5{
		color: red;
	}



 	</style>
 	
</head>
<body>



	<?php
	
echo "<div class='container'>"."<br>";
echo "<b><h3>Welcome to Cars category</h3></b>";

echo "<h5 class=h5> NOTE: No prior payment before delivery of goods, meet in a very safe and open place, ensure you check what you want to buy judiciously before payment</h5></i>";
echo "<center><a href='index.php' button class='btn btn-block'>click to go back to Home Page</a>";
$connection= mysqli_connect('localhost', 'root', '', 'adminlogin');

$query= "select * from clothesbase";


$result= mysqli_query($connection, $query);

$count=0;

while ($row= mysqli_fetch_array($result)) {
	$image=$row['image_name'];
	$Tel_number=$row['Tel_number'];
  	$city=$row['city'];
  	$price=$row['price'];
  	$id=$row['id'];

if ($count/3==0) {
		echo "<div class='row' p-3>";
	}

	echo '<div class="col-md-4">'."<br>";
	
	echo "<img src='{$image}'  class='image' style='outline: 5px solid black ; outline-offset: 3px; height: 240px; width: 290px;'>"."<br></br>";
	echo "<a href='tel:$Tel_number ' class='btn btn-primary'>Call the seller $Tel_number</a>"."<br>";
  echo "<b>CITY:   $city</b>"."<br>";
  echo "<b>PRICE   $price</b>"."<br><br><br>";

  echo"</div>";

  if ($count/3==0 && $count!==0) {
		echo "</div>";
	}

	$count++;







}













	?>


	

</body>
</html>