<!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	 	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


 	<style type="text/css">

 		.image{
 			width: 250px;
			
 		}

 		
 		.navbar-expand-lg{
      background-color: #212529 !important;
    }

    .nav-link{
      color: white !important;
    }

	.h5{
		color: red;
	}



 	</style>
 	

 </head>
 <body>


 

 
<?php

echo "<div class='container'>"."<br>";
echo "<b><h3>Welcome to Cars category</h3></b>";
echo "<h5 class=h5> <i>NOTE: No prior payment before delivery of goods, meet in a very safe and open place, ensure you check what you want to buy judiciously before payment'</h5></i>";
echo "<center><a href='index.php' button class='btn btn-block'>click to go back to Home Page</a>";

$connection= mysqli_connect('localhost', 'root', '', 'adminlogin');

$query= "select * from carbase";


$result= mysqli_query($connection, $query);

$count=0;
// comments
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
    echo "<b>PRICE   $price</b>"."<br>";

  echo"</div>";

  if ($count/3==0 && $count!==0) {
		echo "</div>";
	}

	$count++;







}









?>



</body>
</html>