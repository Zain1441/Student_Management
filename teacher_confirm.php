<?php
if(isset($_POST['f_name'])) {
$server = "localhost";

$username = "root";

$password = "";

$con = mysqli_connect($server, $username, $password);

if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error());
}

$file = addslashes(file_get_contents($_FILES["photo"]["tmp_name"]));
$photo=['photo'];
$f_name = $_POST['f_name'];
$m_name = $_POST['m_name'];
$l_name = $_POST['l_name'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$qualification = $_POST['qualification'];
$experience = $_POST['experience'];
$address = $_POST['address'];
$country = $_POST['country'];
$state = $_POST['state'];
$city = $_POST['city'];
$adhaar = $_POST['adhaar'];
$pan = $_POST['pan'];
$contact_number = $_POST['c_num'];  
$loginid=$f_name.".".$l_name;
$pass=uniqid();

$sql = "INSERT INTO `student`.`teacher_reg` (`sr_no`,`photo`,`f_name`, `m_name`, `l_name`,`dob`, `gender`, `qualification`, `experience`, `address`, `country`, `state`, `city`, `adhaar`,`PAN`,`contact_num`) VALUES (NULL,'$file','$f_name','$m_name','$l_name','$dob','$gender','$qualification','$experience','$address','$country','$state','$city','$adhaar','$pan','$contact_number');";
$ssql= "INSERT INTO `student`.`teacher` (`id`,`teacher_password`) VALUES ('$loginid','$pass');";
$con->query($ssql);
$con->query($sql);



$con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin portal</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
    .header
    {
        position: relative; 
        top: -8px;
        left: -8px;
        width:100%;
        height:80px;
        background-color:#061150;
    }
    header a {
      font-family:viga;
      float: right;
      display: block;
      color: #eeeeee;
      text-align: center;
      padding: 5px 8px;
      text-decoration: none;
      font-size: 18px;
      border: 1.5px solid darkorange;
      border-radius: 8px;
      margin-top: 15px;
      margin-left: 20px;
    margin-right: 20px;

    }
    header b {
		color:#663399;
		font-size:25px;
		font-family:verdana;
		text-align:left;
		margin-top:0px;
		float:left;
		margin:0px;
		line-height:50px;
		padding-left:9px;
    }
    header a:hover {
        background-color: rgb(255, 255, 255);
      color: goldenrod;
    }
    .box1{
    position:absolute;
	  left:50%;
	  top:50%;
	  transform: translate(-50%,-50%);
    background: rgba(221, 211, 211, 0.7);
	  border-radius:10px;
	  padding:70px 70px;
}
</style>

<body>
    
<header> 
        <div class="header">
        <b><img src="logo.png" height="80" width="80"></b>
        <a href="welcomeadmin.php"> Home </a>
        <a href="adminlogin.php"> Log out </a>
        </div>
    </header>

    <style>body{min-height:100vh;}</style>
<div class="box1">
<span class="text-center">Registration Complete.
        <?php

$server = "localhost";
$username = "root";
$password = "";
$database = "student";

$con = mysqli_connect($server,$username,$password);
 

if (!$con) {
die("Could not connect: " );
}
 

$db_selected = mysqli_select_db($con,$database);

if (!$con) {
die("Could not connect: " );
}


echo "<p><font color=green font face='courier' size='6pt'>ID: $loginid <br>Password: $pass</p>";

?>
</span>
           
</div></body></html>

