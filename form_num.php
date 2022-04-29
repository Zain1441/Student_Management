
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
        <a href="welcometeacher.php"> Home </a>
        <a href="teacherlogin.php"> Log out </a>
        </div>
    </header>

    <style>body{min-height:100vh;}</style>
<div class="box1">
<span class="text-center">Thank you for filling out the form.  Your form number is:
        <?php
//change these values accordingly
$server = "localhost";
$username = "root";
$password = "";
$database = "student";
//Make your connection to database
$con = mysqli_connect($server,$username,$password);
 
//Check your connection
if (!$con) {
die("Could not connect: " );
}
 
//Select your database
$db_selected = mysqli_select_db($con,$database);
//Check your connection
if (!$con) {
die("Could not connect: " );
}

$lastrow = mysqli_query($con,"SELECT * FROM student_reg ORDER BY form_no DESC LIMIT 1");
$get_last_row = mysqli_fetch_array($lastrow);
echo "<p><font color=green font face='courier' size='6pt'>$get_last_row[form_no] </p>";

?>
</span>
           
</div></body></html>

