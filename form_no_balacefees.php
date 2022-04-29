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

    <style>body{min-height:vh;}</style> 

<div class="box1">

    <form id=form_n action="balancefees.php" method="post">
    <div class="input-container">
    <label>Enter Form number</label><br>
    <input type="number" id="form_no" name="form_no" />
    <?php $form_no='form_no' ?>
    <button type="submit" name="submit_form">Submit</button>
    </div>
    </form>
</div>
</body>
</html>