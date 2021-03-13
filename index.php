
<!DOCTYPE html>
<html>
<head>
	<title>justuploadit</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="deco.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
  	*{
  		margin: 0; padding: 0; box-sizing: border-box;


  	}

  	#container {
  		min-height: 100vw;
  		display: flex;


  	}

  	.left {
  		width: 35vw;
  		background-color: grey!important;


  	 }

  	 .right{ 

  	 	width: 110vw;
  	 	background-color: #333;



  	 }


  	

  </style>

</head>
<body>
	<div id="container">

		<div class="left"><br>
    <h4><i><b>JUST UPLOAD IT (JTI)</i></h4><br></b>
    <marquee behavior="scroll" direction="up" scrollamount="2"><h5 class="adv">Just Upload It (JTI) is a platform designed for quid pro quo. It is a website designed for sellers to meet buyers and buyers to meet sellers for easy transactions:</h5></marquee>

  <style type="text/css">
    .adv{
       color: red;
    }

  </style><br><br><br>

  <h5 class="h">NOTE: This section is meant for admin only <style type="text/css">.h{color: brown;}</style></h5>
  <center><img src="adminpic.png.jpg" class="adm"></center><br>



  <form method="post" action="">
  
         <i class="fa fa-envelope-o" aria-hidden="true"></i> <b>Email</b><input type="text" name="email" required/><br>

         <i class="fa fa-ticket" aria-hidden="true"></i><b>Password</b><input type="password" name="password"required/><br>

 <center><i class="fa fa-sign-language fa-2x" aria-hidden="true"></i>
 <input type="submit" name="Login" value="Login" required/></center></form><br>


  <style type="text/css">
    .adm{
      width: 200px;
    }

    .more{
      color: gold!important;
    }

  </style><br>
  <h5> Hakkeym is an Educationist, a Msc degree holder in Information Technology, a Programmer (Website Developer)and he is the owner of this site(justuploadit), created by him and as well he is incharge as an admin of the website. You can reach him out pertaining to the main objectives on why this platform is being created and you can equally get in touch on how to improve the site.<b>hakkeymshiru7@gmail.com</b></h5><br>

 
 
    




    </div>
		<div class="right"><br>
      <center><h3 class="r">Click on the category of any products you wish to purchase here<style type="text/css">.r{
        color: white;
      }</style></h3></center><br>

<center>
  <div class="row">
      <div class="col-md-4">
        <a href="upload.php">
        <img src="01.jpg"class="ctg"><br></a><br>
        <h4 class="me">Upload</h4>
      </div>

  <div class="col-md-4">
    <a href="cars0.php">
    <img src="02.jpg" class="ctg"><br></a><br>
    <h4 class="me">Cars</h4>
  </div>

  <div class="col-md-4">
<a href="clothes0.php">
  <img src="003.jpg" class="ctg"></a><br><br>
  <h4 class="me">Clothes</h4>
</div></div><br>

<div class="row">
<div class="col-md-4">
  <a href="laptops0.php>">
  <img src="pc.jpg" class="ctg"></a><br><br>
  <h4 class="me">Laptop</h4>
</div>

<div class="col-md-4">
  <a href="genertorset.php">
<img src="09.jpg" class="ctg"></a><br><br>
<h4 class="me">Generator</h4>
</div>

<div class="col-md-4">
  <a href="Televisions.php">
<img src="05.jpg" class="ctg"></a><br><br>
<h4 class="me">Television</h4>
</div></div>><br>

<div class="row">
<div class="col-md-4">
  <a href="cellphone.php">
  <img src="06.jpg" class="ctg"></a><br><br>
  <h4 class="me">Cellphones</h4>
</div>

<div class="col-md-4">
  <a href="Soccerkit.php">
  <img src="07.jpg" class="ctg"></a><br><br>
  <h4 class="me">Soccer Kit</h4>
</div>

<div class="col-md-4">
  <a href="kitchen.php">
  <img src="08.jpg" class="ctg"></a><br><br>
  <h4 class="me">Kitchen Utensils</h4>
</div></div><br>

<div class="row">
<div class="col-md-4">
  <a href="fan.php">
  <img src="010.jpg" class="ctg"></a><br><br>
  <h4 class="me">Fans</h4>
</div>

<div class="col-md-4">
  <a href="shoes.php">
  <img src="04.jpg" class="ctg"></a><br><br>
  <h4 class="me">Shoes</h4>
</div>

<div class="col-md-4">
  <a href="houses.php>">
  <img src="03.jpg" class="ctg"></a><br><br>
  <h4 class="me">House</h4>

</div></center><br><br><br>






      <div class="footer2"><br><br>
    <center><center>
<a href="mailto:EmailAddress@.hakkeymshiru7@gmail.com"><i class="fa fa-envelope-o fa-2x" aria-hidden="true"></i><pre></pre></a>
<a href='https://wa.me/+2348065162178' target='_blank'><i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i><h7> <pre></pre></a>

</center></center>
        
        JustUploadIt All Rights Reserved.<br>
          Developed by Hakkeymshiru<pre></pre>
  


          <style type="text/css">
            
            .footer2{
  background: #111;
  color: white;
}
          </style>



















<style type="text/css">
  
  .ctg{
    width: 250px;
    height: 230px;
    outline: 5px solid white;
    outline-offset: 5px;
  }

  .me{
    color: white;
  }
</style>


    






    </div>
  </div>

  

</body>
</html>
<!-- 
<!-- <?php
//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
?> --> -->