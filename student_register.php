<?php
if(isset($_POST['f_name'])) {
$server = "localhost";

$username = "root";

$password = "";

$con = mysqli_connect($server, $username, $password);

if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error());
}

$file = addslashes(file_get_contents($_FILES["profile_pic"]["tmp_name"]));
$Profile_pic=['profile_pic'];
$f_name = $_POST['f_name'];
$m_name = $_POST['m_name'];
$l_name = $_POST['l_name'];
$Fathers_name = $_POST['father_name'];
$Mothers_name = $_POST['mother_name'];
$dob = $_POST['dob'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$country = $_POST['country'];
$state = $_POST['state'];
$city = $_POST['city'];
$mob_number = $_POST['p_num'];
$w_number = $_POST['w_num'];



$sql = "INSERT INTO `student`.`student_reg` (`Profile_pic`,`f_name`, `m_name`, `l_name`, `Fathers name`, `Mothers name`, `dob`, `age`, `Gender`, `address`, `country`, `state`, `city`, `mob_number`,`whatsapp_num`,`desc`) VALUES ('$file','$f_name','$m_name','$l_name','$Fathers_name','$Mothers_name','$dob','$age', '$gender','$address','$country','$state','$city','$mob_number','$w_number', current_timestamp());";

$con->query($sql);
  if(isset($_POST['submit']))
  {
  ?>
      <script type="text/javascript">
          window.location="http://localhost/WP/form_num.php";
          </script>
    <?php
  }
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
   body{
    background-image: url(logo.png);
    background-position: center;
    background-origin: content-box;
    background-repeat: no-repeat;
    background-size: 80;
    font-family: 'Noto Sans', sans-serif;
}
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
      float: left;
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
</style>

<body>
    
<header> 
        <div class="header">
        <b><img src="logo.png" height="80" width="80"></b>
        <a href="welcometeacher.php"> Home </a>
        <a href="teacherlogin.php"> Log out </a>
		
        </div>
    </header>

    <style>body{min-height:220vh;}</style>
<div class="box">
    <form id="s_form" action="student_register.php" method = "post" enctype="multipart/form-data">
        <span class="text-center">Student Registration</span>
        <div class="input-container">
        <span class="hovertext" data-hover="Upload jpeg/jpg file only">
        <label>Photo:</label><br>
        <input type="file" id="profile_pic" name="profile_pic" accept="image/jpg, image/jpeg" ><br>
        </span>
        </div>
        <div class="input-container">
            <label>Full name:</label><br>
            <input type="text" id="f_name" name="f_name" placeholder="First Name" required="required">
            <input type="text" id="m_name" name="m_name" placeholder="Middle Name" >
            <input type="text" id="l_name" name="l_name" placeholder="Last Name" required="required">
        </div>
        <div class="input-container">
            <label>Parents name:</label><br>
            <input type="text" id="father_name" name="father_name" placeholder="Father's Name" required="required">
            <input type="text" id="mother_name" name="mother_name" placeholder="Mother's Name" required="required">
        </div>
        <div class="input-container">
            <label>Date of Birth:</label><br>
            <input type="date" id="dob" name="dob" required="required"><br>
        </div>
        <div class="input-container">
                <label>Age:</label><br>
                <input type="number" id="age" name="age" required="required"><br>
        </div>
        <div class="input-container">
                <label>Gender:</label><br>
                <select id="gender" name="gender" required="required">
                    <option value="" selected="selected" disabled="disabled">-- select one --</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select><br>
        </div>
    
        <div class="input-container">
            <label>Address:</label><br>
            <input type="text" id="address" name="address" placeholder="Apartment/building number, Street name, Area"><br>
            <input type="text" id="address" name="country" placeholder="Country" required="required"><br>
            <input type="text" id="address" name="state" placeholder="State" required="required"><br>
            <input type="text" id="address" name="city" placeholder="City" required="required"><br> 
        </div>
        <div class="input-container">
            <label>Contact num (Mobile):</label><br>
            <input type="number" id="p_num" name="p_num" minlength="10" maxlength="10" placeholder="XXX-XXX-XXXX" pattern="[9]{3}-[0-9]{3}-[0-9]{4}"
            required="required"><br>
        </div>
        <div class="input-container">
            <label>Contact num (Whatsapp):</label><br>
            <input type="number" id="w_num" name="w_num" minlength="10" maxlength="10" placeholder="XXX-XXX-XXXX" pattern="[9]{3}-[0-9]{3}-[0-9]{4}"
            required="required"><br>
</div>
            <button type="submit" name="submit" class="btn">submit</button>
    
    </form>

</div>
</body>
</html>
