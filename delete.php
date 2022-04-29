<?php

require_once("config.php");

if(isset($_GET['Del']))
         {
             $course_id = $_GET['Del'];
             $query = " delete from course where course_id = '".$course_id."'";
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