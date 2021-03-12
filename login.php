<?php

// session_start();
// if (!isset($SESSION['email'])) {
// 	 header('location: index.php');
// } 

if (isset($_POST['Login'])) {
	$email= $_POST['email'];
	$password= $_POST['password'];

	$connection= mysqli_connect('localhost', 'root', '', 'adminlogin');
	$query= "select * from adm where email= '$email' and password= '$password'";
	$result= mysqli_query($connection, $query);

	if ($result){
		if ($result->num_rows==0){
		echo "This page is meant for Admin only";
		echo "<script>
		alert('This page is meant for admin alone')
		</script>";
	
	}

	else{
		while ($row= mysqli_fetch_array($result)) {
			$_SESSION['email']= $row['email'];
			$_SESSION['password']= $row['password'];
			$_SESSION['id']= $row['id'];
			
		}

		header('location:adm.php');
	}


}
}

?>

