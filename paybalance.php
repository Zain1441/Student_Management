<?php
if(isset($_POST['submit_bal'])) {

    include('config.php');

$pay_fees=$_POST['pay_fees'];
$total_fees=$_POST['total_fees'];
$balance_fees=$_POST['balance_fees'];
$form_no=$_POST['form2_no'];
$diff_payfees=abs($balance_fees-$pay_fees);
$paid_fees=abs($total_fees-$diff_payfees);
$newbalace=abs($total_fees-$paid_fees);


$sql = ("UPDATE student_fees SET paid_fees='$paid_fees', balance_fees='$newbalace' WHERE form_no = '$form_no'");

$con->query($sql);
  if(isset($_POST['submit_bal']))
  {
  ?>
      <script type="text/javascript">
          window.location="http://localhost/WP/payment_complete.php";
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
        <a href="teacherlogin.php?logstate=logout"> Log out </a>
        </div>
    </header>

    <style>body{min-height:100vh;}</style>
    <form id="balance_fees" action="paybalance.php" method="post" onsubmit="return ValidationForm()">
    <div class="box1">
<span class="text-center">FEES Details:
        
        <?php

include('config.php');
if(isset($_POST['submit']))
{
$form_no=$_POST['form1_no'];
$sql= mysqli_query($con,"SELECT * FROM student_fees where form_no = '$form_no' ");
$sqql= mysqli_query($con,"SELECT * FROM student_reg where form_no = '$form_no' ");
if(!$sql)
{
   echo "Data not found";
   die();
}
else{
while($row = mysqli_fetch_array($sql)) {
  echo " <br> <br>Form no: {$row[1]} <br>";
  while($rrow = mysqli_fetch_array($sqql)) {
   echo "Name: {$rrow[2]} {$rrow[4]} <br>"; } 
   echo "Balance Fees: {$row[9]} <br>";
   $bfees=$row[9];
   if($row[8]==$row[7]) {
       echo "<p><font color=green font face='courier' size='6pt'><br> Fees Completely Payed! </p>"; }
       else {?>
       <input type="hidden" id="total_fees" name="total_fees" value=" <?php echo $row[7] ?>" >
       <input type="hidden" id="balance_fees" name="balance_fees" value=" <?php echo $row[9] ?>" >
   <div class="input-container">
            <label> <br> Pay Fees:</label><br>
            <input type="number" id="pay_fees" name="pay_fees" min="0" max=" <?php echo $row[9] ?> " required="required">
   </div><br>
            <input type="hidden" id="form2_no" name="form2_no" value=" <?php echo $form_no ?>" > 
<button type="submit" name="submit_bal" onclick="validation();"  class="btn">Pay Balance</button>
<?php
   }
}


}
}
else{ echo "Form no empty";}
?>
<script>
      function ValidationForm() {
        let payfees = document.forms["balance_fees"]["pay_fees"];

        if(payfees.value > <?php echo $bfees ?>) {
          alert("Balance Amount Exceeded!");
          payfees.focus();
          return false;
        }
        if(payfees.value <= 0) {
          alert("Amount must be greater than 0!");
          payfees.focus();
          return false;
        }
        }
</script>
</span> 

</div>
  </form>
  </body>
  </html>