<?php
require('connect.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Take attendance</title>
</head>
<body>
</body>
    <?php echo " Attendance";
    echo "<br>";
    echo $_SESSION['course_code'];
    $course_code=$_SESSION['course_code'];
    echo "<br>";
    echo $_SESSION['table_name'];
    $table_name = $_SESSION['table_name'];
    echo "<br>";
    $t_id = $_SESSION['teacher_id'];
    echo "$t_id";
     ?>

     <form action="take_attendance.php" method="POST">
       <?php
       $i=1;
       for($i=1;$i<12;$i++)
       {
          ?>
          <input type="radio" name="<?php echo $i; ?>" value="P"><?php echo $i; ?>P</input>
          <input type="radio" name="<?php echo $i; ?>" value="A"> <?php echo $i; ?>A</input>
          <br>
      <?php } ?>

      <input type="submit" name="submit" value="submit">

     </form>

     <?php

    $i=1;

     if(isset($_POST['submit']))
     {
       $atten = "";
       for($i=1;$i<12;$i++)
       {
         echo $_POST[$i];
         $atten=$atten.",'".$_POST[$i]."'";

       }
       echo "<br>";
       echo "$atten";
     }

     $query = "insert into $table_name values('$course_code',CURRENT_TIMESTAMP,'$t_id'".$atten.")";
     echo "$qry";
     $result=mysqli_query($connection,$query);

      ?>


</html>
