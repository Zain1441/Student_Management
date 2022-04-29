<?php 

    require_once("config.php");
    $course_id = $_GET['GetID'];
    $query = " select * from course where course_id='".$course_id."'";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $course_id = $row['course_id'];
        $course_name = $row['course_name'];
        $category = $row['category'];
        $no_of_lecs = $row['no_of_lecs'];
        $fees = $row['fees'];
    }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>Document</title>
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
    body{min-height:200vh;}
</style>
    <header> 
        <div class="header">
        <b><img src="logo.png" height="80" width="80"></b>
        <a href="http://127.0.0.1:5500/admin_teacher_reg.html"> New Fees </a>
        <a href="http://127.0.0.1:5500/admin_view.html"> Check Balance Fees </a></li>
        <a href="http://127.0.0.1:5500/adminlogin.html"> Log out </a>
		
        </div>
    </header>
<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-success text-white text-center py-3"> Edit Course</h3>
                        </div>
                        <div class="card-body">

                            <form action="update.php?ID=<?php echo $course_id ?> " method="post">
                            <input type="text" class="form-control mb-2" placeholder=" course name " name="course_name">
                                <select id="category" name="category">
                    <option value="" selected="selected" disabled="disabled">-- select one --</option>
                    <option value="Regular batch">Regular batch</option>
                    <option value="Vaccation batch">Vaccation Batch</option>
                    <option value="Course batch">Course Batch</option>
                </select>
                                <input type="number" class="form-control mb-2" placeholder=" no of lecs" name="no_of_lecs">
                                <input type="number" class="form-control mb-2" placeholder=" fees" name="fees">
                                <button class="btn btn-primary" name="update">Update</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>
