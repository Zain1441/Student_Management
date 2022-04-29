<?php 

    require_once("config.php");
    $query = "select * from course";
    $result = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>View course</title>
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
        <a href="welcometeacher.php"> Home </a>
        <a href="teacherlogin.php"> Log out </a>
        </div>
    </header>

    
<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                    <h3 class="bg-success text-white text-center py-3"> Course List</h3>
                        <table class="table table-bordered">
                            <tr>
                                <td> Course ID </td>
                                <td> Course Name </td>
                                <td> Category</td>
                                <td> No of lecs </td>
                                <td> fees </td>
                                <td> Edit  </td>
                                <td> Delete </td>
                            </tr>

                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $course_id= $row['course_id'];
                                        $course_name = $row['course_name'];
                                        $category = $row['category'];
                                        $no_of_lecs = $row['no_of_lecs'];
                                        $fees= $row['fees'];
                            ?>
                                    <tr>
                                        <td><?php echo $course_id?></td>
                                        <td><?php echo $course_name ?></td>
                                        <td><?php echo $category ?></td>
                                        <td><?php echo $no_of_lecs ?></td>
                                        <td><?php echo $fees ?></td>
                                        <td><a href="edit.php?GetID=<?php echo $course_id?>">Edit</a></td>
                                        <td><a href="delete.php?Del=<?php echo $course_id?>">Delete</a></td>
                                    </tr>        
                            <?php 
                                    }  
                            ?>                                                                    
                                   

                        </table>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>




