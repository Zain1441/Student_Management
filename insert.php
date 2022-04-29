<?php

    require_once("config.php");

    if(isset($_POST['submit']))
    {
        if(empty($_POST['course_name']) || empty($_POST['category']) || empty($_POST['fees'])|| empty($_POST['no_of_lecs']))
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {
            $course_name = $_POST['course_name'];
            $category = $_POST['category'];
            $no_of_lecs = $_POST['no_of_lecs'];
            $fees = $_POST['fees'];

            $query = " insert into course (course_name, category, no_of_lecs, fees) values('$course_name','$category','$no_of_lecs','$fees')";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:view.php");
            }
            else
            {
                echo '  Please Check Your Query ';
            }
        }
    }
    else
    {
        header("location:index.php");
    }



?>