<?php
require('connect.php');
include("student_nav_bar.php");
?>

<!DOCTYPE html>
<title>Marks</title>
<body>
<!-- Page Content -->
<div style="margin-left:20%">

    <div class="w3-container w3-teal">
      <h1>Attendance Pagess</h1>
    </div>


    <div class="w3-container">
    <h2><?php echo $_SESSION['student_id']; ?></h2>
    <p>The marks you have taken are:</p>
    </div>

    <?php
      if(isset($_POST['complete_attendance']))
      {

        $student_attendance_table=$_SESSION['student_attendance_table'];
        $course_code = $_POST['complete_attendance'];
        echo $course_code;
        $student_id = $_SESSION['student_id'];
        $query = "SELECT course_code, attendance_time,$student_id from $student_attendance_table where course_code='$course_code'";
        $result=mysqli_query($connection,$query);
        while($row=$result->fetch_assoc())
        {
          echo "<br>";
          echo $row['course_code'];
          echo "  ";
          echo $row['attendance_time'];
          echo "  ";
          echo $row[$student_id];
          echo "<br>";
        }


      }

    ?>



</div>


</body>
</html>
