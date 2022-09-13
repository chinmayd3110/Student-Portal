<?php
require('connect.php');
session_start();
if(isset($_POST['submit']))
{

   $zxc = $_POST['teach'];
   echo "$zxc<br>";
   $sep = explode('-',$zxc);

   $course_code = $sep[0];
   echo "$course_code<br>";

   $_SESSION['course_code'] = $sep[0];
   $_SESSION['table_name']= $sep[1]."_attendance";


   echo $_SESSION['teacher_id'];
}

?>

 <!DOCTYPE html>
 <html>
 <head>
   <style>
       #btn{
           background-color: #0056ff;
           padding-top: 12px;
           padding-bottom: 12px;
           font-size: 18px;
           border: none;
           color: aliceblue;
           padding-left: 24px;
           padding-right: 24px;
       }
    </style>
  </head>

 <body>

      <br>
 <form action="specific_class.php" method="post">

   <div>
     <input id="btn" type="submit" name="take_attendance" value="take_attendance">
   </div>

   <br>

   <div>
     <input id="btn" type="submit" name="view_attendance" value="view_attendance">
   </div>


      <br>

   <div>
     <input id="btn" type="submit" name="enter_marks" value="enter_marks">
   </div>


      <br>

   <div>
     <input id="btn" type="submit" name="view_marks" value="view_marks">
   </div>

 </form>

 <?php

   if(isset($_POST['take_attendance']))
   {
     header("Location: take_attendance.php");
   }



   if(isset($_POST['view_attendance']))
     {
       header("Location: view_attendance.php");
     }


   if(isset($_POST['enter_marks']))
     {
       header("Location: enter_marks.php");
     }


   if(isset($_POST['view_marks']))
     {
       header("Location: view_marks.php");
     }

 ?>



</body>
</html>
