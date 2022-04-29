<?php
if(isset($_POST['submit_fees'])) {
$server = "localhost";

$username = "root";

$password = "";

$db="student";

$con = mysqli_connect($server, $username, $password, $db);

if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error());
}

$reciept_no = uniqid();
$form_no = $_POST['forrm_no'];
$course = $_POST['course1'];
$payment = $_POST['Payment'];
$bank_name = $_POST['bank_name'];
$cheque_name = $_POST['cheque_name'];
$total_fees=$_POST['total_fees'];
$paid_fees=$_POST['paid_fees'];

$sql = ("UPDATE student_fees SET reciept_no = '$reciept_no', course = '$course', Payment = '$payment',Bank_name='$bank_name', Cheque_name='$cheque_name', total_fees='$total_fees', paid_fees='$paid_fees' WHERE form_no = '$form_no'");

$con->query($sql);
if(isset($_POST['submit_fees']))
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
    <link href='https://fonts.googleapis.com/css?family=Viga' rel='stylesheet'>
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

    <style>body{min-height:200vh;}</style> 

<div class="box">

<form id="pay_form" action="payment.php" method = "post">
        <span class="text-center">New Fees</span>

<div class="input-container">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <label>Select Payment Method:</label><br>
            <select id="Payment" name="Payment" onchange="payment_ch()">
                <option value="" selected="selected" disabled="disabled">-- none selected --</option>
                <option value="cash">Cash</option>
                <option value="cheque">Cheque</option>
                <option value="UPI">Online UPI</option>
            </select><br>

</div>
            <script>

                function payment_ch()
                {
                  var value = $('#Payment').val();
                  if (value == "cheque") {
                    var div = $("#bank_name");
                    div.html('<b> <label>Bank Name:</label><br> <input type="text" id="bank_name" name="bank_name" </b>');
                    var div = $("#cheque_name");
                    div.html('<b> <label>Cheque Name:</label><br> <input type="text" id="cheque_name" name="cheque_name" </b>');
                    var div = $("#display");
                    div.html('');
                  }
                  if (value == "cash") {
                    var div = $("#display");
                    div.html('<b> Please pay fees at the admin office </b>');
                    var div = $("#bank_name");
                    div.html('');
                    var div = $("#cheque_name");
                    div.html('');
                  }
                  if (value == "UPI") {
                    var div = $("#display");
                    div.html('<b>  Please pay owed amount via UPI.   <br> UPI ID: wpcollege@abcbank </b>');
                    var div = $("#bank_name");
                    div.html('');
                    var div = $("#cheque_name");
                    div.html('');
                  }
                }

            </script>
            
            <br>
            <span id="bank_name" name ="bank_name" class="input-container"><br></span>
            <br>
            <span id="cheque_name" name="cheque_name" class="input-container"><br></span>
            <br>
            <span id="display" class="input-container"><br></span>
<?php

$form_no = $_POST['forrm_no'];
$course = $_POST['course'];?>
<input type="hidden" id="forrm_no" value="<?php echo $form_no ?>" name= "forrm_no">
<input type="hidden" id="course1" value="<?php echo $course ?>" name= "course1"><?php
$conn=mysqli_connect("localhost","root","","student");
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_connect_error());
   }

   $sql = "SELECT * FROM course where course_name = '$course' ";
   $result = mysqli_query(  $conn,$sql );

   if(!$result)
   {
      echo "Data not found";
      die();
   }
   else{
   while($row = mysqli_fetch_array($result)) {
     $xa=$row[4];
     echo "form no: {$form_no} <br>";
      echo "Total Fees: {$row[4]} <br>";
      // echo "Name: {$row[3]} {$row[4]} {$row[5]} <br>".
        "<br>";
       ?> <input type="hidden" id="total_fees" name="total_fees" value=<?php echo $xa ?>><br> <?php
   }
  }

?>

<div class="input-container">
            <label>Paid Fees:</label><br>
            <input type="number" id="paid_fees" name="paid_fees" required="required">
</div>

          <button type="submit" name="submit_fees" class="btn">Submit</button>
</form>
</div>
</body>
</html>
    