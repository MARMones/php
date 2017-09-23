<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Shojumaru&amp;subset=latin-ext" rel="stylesheet">

	<header>
		<div style="background-color: black; height: 80px;">
		<i class="fa fa-drupal" style="margin-right: 1500px; font-size:48px; color:red;">A</i>
	</header>	
	
<style>
body, html {
    height: 100%;
    margin: 0;
}

.bg {
    /* The image used */
    background-image: url("background.gif");

    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
@media only screen and (min-width: 50px;)
.form {
}
}

</style>
</head>
<body>

<div class="bg"></div>

<center>

<form method="post" action="login.php"> 

		<label style="color: white; font-family:arial; position:absolute; top:20px; left: 150px">Enter Username:</label>
			<input type="text" name="txtuname" 
				style="border-radius:5px; width: 142px; height: 15px; position: absolute; left:150px; top:50px"/>
		
		<label style="color: white; font-family:arial; position:absolute; top:20px; left: 320px">Enter Password:</label>	
			<input type="password" name="txtpword" 
				style="border-radius:5px; width: 142px; height: 15px; position: absolute; left: 320px; top:50px"/>
		
			<input type="submit" name="login" value="login" style="border-radius:7px; width: 80px; position: absolute; left: 480px; top:50px">
	
</form>



	<form method="post" action="signup.php"> 
		<label style="color: white; font-family:arial; position: absolute; top:200px; left:930px; font-size: 40px">SIGN UP!!!</label>
			
			<input type="text" name="txtuname" placeholder="username"
				style="border-radius:5px; position: absolute; right:130px; top:250px; height:35px; width: 450px; font-size: 20px "/>
			<input type="password" name="txtpword" placeholder="password"
				style="border-radius:5px; position: absolute; right:130px; top:300px; height:35px; width: 450px; font-size: 20px "/>
			<input type="submit" name="signup" value="Sign up" 
				style="border-radius:5px; width: 142px; position: absolute; right:300px; top:350px; height:35px; width: 100px; font-size: 20px ">

	</form>

	<br>

</center>	
</body>
</html>