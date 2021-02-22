<?php 
$host="localhost";
$user="root";
$password="";
$db="magarun";
$mysqli = new mysqli("localhost","root","","magarun");
if ($mysqli -> connect_errno) {
	echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
	exit();
  }

if(isset($_POST['username'])){
    $uname=$_POST['username'];
    $password=$_POST['password'];
    // $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $sql="select * from loginform where user='".$uname."'AND Pass='".$password."' limit 1";
    $result=mysqli_query($mysqli,$sql);
    if(mysqli_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>
<!DOCTYPE html>
<html>
<head>
	<title> Login Form in HTML5 and CSS3</title>
	<link rel="stylesheet" a href="style.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body>
	<div class="container">
	<img src="logo.png"/>
		<form method="POST" action="#">
			<div class="form-input">
				<input type="text" name="username" placeholder="Enter the User Name"/>	
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="password"/>
			</div>
			<input type="submit" type="submit" value="LOGIN" class="btn-login"/>
		</form>
	</div>
</body>
</html>