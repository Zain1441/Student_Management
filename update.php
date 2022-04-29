<?php 

    require_once("config.php");

    if(isset($_POST['update']))
    {
        $course_id = $_GET['ID'];
        $course_name = $_POST['course_name'];
        $category = $_POST['category'];
        $no_of_lecs = $_POST['no_of_lecs'];
        $fees = $_POST['fees'];

        $query = " update course set course_name = '".$course_name."', category='".$category."',no_of_lecs='".$no_of_lecs."',fees='".$fees."' where course_id='".$course_id."'";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:view.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:view.php");
    }


?>