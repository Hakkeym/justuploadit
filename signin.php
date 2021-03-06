<?php

if (isset($_POST['submit'])) {
	$email=$_POST['email'];
	$password=$_POST['password'];


	if ($email=='') {
		echo "enter your email";

		echo "<script>

		alert('enter your email')

		</script>";

	}

	elseif ($password=='') {
		echo "enter your password";

		echo "<script>

		alert('enter your password')

		</script>";
	}

	

	else{
		$connection= mysqli_connect('localhost', 'root', '', 'adminlogin');
		$query="insert into adm values('', '$email', '$password')";
		$cfc=mysqli_query($connection, $query);
		if ($cfc){
			header('location:index.php');
		}
		else{
			echo mysqli_error($connection);
		}
	}


}
?>










<h3>CREATE ACCOUNT</h3>
				<form method="post" action="">
					EMAIL: <input type="email" name="email" class="form-control" placeholder="Enter your email" required/><br>
					PASSWORD: <input type="password" name="password" class="form-control" placeholder="Enter your password" id="password" required/><br>

					<input type="submit" name="submit" class="btn btn-primary" value="Create Account"><br><br>
					<center><a href="index.php" button class="btn btn-danger">go back</a></center>
				</form>
