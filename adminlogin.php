<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($con,$_POST['adminid']);
      $mypassword = mysqli_real_escape_string($con,$_POST['password']); 
      
      $sql = "SELECT id FROM admin WHERE id = '$myusername' and admin_password = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        session_start();

      if (isset($_POST['submit'])) {

      $_SESSION['login_user'] = $myusername;
      header("location: welcomeadmin.php");

      if (isset($_REQUEST['logstate'])) {
      session_destroy();
      }
      }

       
      }
      else {
         $error = "Your Login Name or Password is invalid";
         echo $error;
      }
   }
?>

<!DOCTYPE html>
<html lang="en">
    <link href='https://fonts.googleapis.com/css?family=Viga' rel='stylesheet'>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login portal</title>
</head>
<body>
  <header> 
    <div class="header">
      <b><img src="logo.png" height="80" width="80"></b>
      <a href="teacherlogin.php"> Teacher Login </a>
      </div>
    </header>
    <style>
    .header
    {
        position: relative; 
        top: 0px;
        left: 0px;
        width:110%;
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

  <img align="right" src="col_img.jpg" height="850" width="500">
    <section class="vh-100">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6 text-black">
      
              <div class="px-5 ms-xl-4">
                <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
                <img src="logo.png">
              </div>
      
              <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
      
                <form style="width: 23rem;" action=adminlogin.php method="post">>
      
                  <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>
    
                  <div class="form-outline mb-4">
                    <input type="text" name=adminid id="adminid" class="form-control form-control-lg" />
                    <label class="form-label" for="adminid">Admin ID</label>
                  </div>
      
                  <div class="form-outline mb-4">
                    <input type="password" name=password id="password" class="form-control form-control-lg" />
                    <label class="form-label" for="password">Password</label>
                  </div>
      
                  <div class="pt-1 mb-4">
                    <button class="btn btn-info btn-lg btn-block" name=submit type="submit">Login</button>
                  </div>
      
                </form>
      
              </div>
      
            </div>
          </div>
        </div>
      </section>
</body>
</html>