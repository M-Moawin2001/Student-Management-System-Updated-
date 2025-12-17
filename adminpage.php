<?php
$con = mysqli_connect("localhost", "root", "", "adminpage");
session_start();
if(isset($_POST['btnsave'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $data = mysqli_query($con, "SELECT * FROM admin WHERE username = '$username' AND PASSWORDs = '$password'");
    if(mysqli_num_rows($data) > 0) { 
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        header("location: portal.php");
        exit(); 
    } else {
        echo '<script>alert("Wrong Username or Password")</script>';
    }
}
?>

 
 
 <!-- Coding by CodingNepal | www.codingnepalweb.com -->
 <html lang="en" dir="ltr">
    <head>
      <meta charset="UTF-8">
      <title> Admin portal </title>
      <link rel="stylesheet" href="complainform.css">
      <link rel="stylesheet" href="portal.css">
      <!-- Boxiocns CDN Link -->
      <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <style>
body{
	margin: 0;
	padding: 0;
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	font-family: 'Jost', sans-serif;
	background: linear-gradient(115deg, #56d8e4 10%, #9f01ea 90%) ;
}
.main{
	width: 350px;
	height: 500px;
	background: red;
	overflow: hidden;
	background: url("https://doc-08-2c-docs.googleusercontent.com/docs/securesc/68c90smiglihng9534mvqmq1946dmis5/fo0picsp1nhiucmc0l25s29respgpr4j/1631524275000/03522360960922298374/03522360960922298374/1Sx0jhdpEpnNIydS4rnN4kHSJtU1EyWka?e=view&authuser=0&nonce=gcrocepgbb17m&user=03522360960922298374&hash=tfhgbs86ka6divo3llbvp93mg4csvb38") no-repeat center/ cover;
	border-radius: 10px;
	box-shadow: 5px 20px 50px #000;
}
#chk{
	display: none;
}
.signup{
	position: relative;
	width:100%;
	height: 100%;
}
label{
	color: #fff;
	font-size: 2.3em;
	justify-content: center;
	display: flex;
	margin: 60px;
	font-weight: bold;
	cursor: pointer;
	transition: .5s ease-in-out;
}
input{
	width: 60%;
	height: 20px;
	justify-content: center;
	display: flex;
	margin: 20px auto;
	padding: 10px;
	border: none;
	outline: none;
	border-radius: 5px;
}
.input .login{
    background: linear-gradient(115deg, #56d8e4 10%, #9f01ea 90%) ;
}
#btnsave{
	width: 60%;
	height: 40px;
	margin: 10px auto;
	justify-content: center;
	display: block;
	color: #fff;
	background: #573b8a;
	font-size: 1em;
	font-weight: bold;
	margin-top: 20px;
	outline: none;
	border: none;
	border-radius: 5px;
	transition: .2s ease-in;
	cursor: pointer;
}
 .button{
	width: 60%;
	height: 40px;
	margin: 10px auto;
	justify-content: center;
	display: block;
	color: #fff;
	background: #573b8a;
	font-size: 1em;
	font-weight: bold;
	margin-top: 20px;
	outline: none;
	border: none;
	border-radius: 5px;
	transition: .2s ease-in;
	cursor: pointer;
}
#btn{
	width: 60%;
	height: 40px;
	margin: 10px auto;
	justify-content: center;
	display: block;
	color: #fff;
	background: #573b8a;
	font-size: 1em;
	font-weight: bold;
	margin-top: 20px;
	outline: none;
	border: none;
	border-radius: 5px;
	transition: .2s ease-in;
	cursor: pointer;
} 

button:hover{
	background: #6d44b8;
}
.login{
	height: 460px;
	background: #eee;
	border-radius: 60% / 10%;
	transform: translateY(-180px);
	transition: .8s ease-in-out;
}
.login label{
	color: #573b8a;
	transform: scale(.6);
}

#chk:checked ~ .login{
	transform: translateY(-500px);
}
#chk:checked ~ .login label{
	transform: scale(1);	
}
#chk:checked ~ .signup label{
	transform: scale(.6);
}


      </style>
    </head>
  <body>
  <Form action="adminpage.php" method="post">
  <div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
			<form>
                <div class="admin">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="text" id="username" name="username" placeholder="username" required="">
					<input type="password" name="password" id="password" placeholder="password" required="">
                    </div>
					
					<input type="submit" id="btnsave" name="btnsave" value="Login">
				</form>
			</div>

			<div class="login">
				<form>
				<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text"  placeholder="username" required="">
					<input type="email"  placeholder="email" required="">
					<input type="password" placeholder="password" required="">
					<button id="btn">Sign up</button>
				</form>
				
				</form>
				
				
			</div>
	</div>

</body>
</html>

