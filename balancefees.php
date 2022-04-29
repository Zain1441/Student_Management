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
	  top:80%;
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
    <form id="balance_fees" action="paybalance.php" method="post">
    <div class="box1">
<span class="text-center">FEES Details:
        
        <?php

include('config.php');
if(isset($_POST['form_no']))
{
$form_no=$_POST['form_no']; 
$sql= mysqli_query($con,"SELECT * FROM student_fees where form_no = '$form_no' ");
$row = mysqli_fetch_array($sql);
if(!$row)
{
  ?>
  <script type="text/javascript">
      window.location="http://localhost/WP/nodata.php";
      </script>
<?php
}
else{
  echo " <br> Course: {$row[3]} <br>";
  echo "Form no {$row[1]} <br>";
   echo "Total Fees: {$row[7]} <br>";
   echo "Paid Fees: {$row[8]} <br>";
   echo "Balance Fees: {$row[9]} <br> ";

}

}
?>
<input type="hidden" id="form1_no" name="form1_no" value=" <?php echo $form_no ?>" > 
<button type="submit" name="submit" class="btn">Pay Balance</button>
</span>
</div>
  </form>
  </body>
  </html>