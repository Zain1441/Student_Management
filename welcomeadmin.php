<?php
   include('session.php');
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
.box1 a {
      font-family:viga;
      float: inline-start ;
      display: block;
      color: #000000;
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
    .box1 a:hover {
        background-color: rgb(255, 255, 255);
      color: goldenrod;
    }
</style>

<body>
    
<header> 
        <div class="header">
        <b><img src="logo.png" height="80" width="80"></b>
        <a href="adminlogin.php?logstate=logout"> Log out </a>
		
        </div>
    </header>

    <style>body{min-height:100vh;}</style>
<div class="box1">
<a href="admin_teacher_reg.php"> Teacher Registration </a><br>
<a href="view.php"> View and edit Course</a><br>
<a href="index.php"> Add new Course</a>

</div></body></html>
