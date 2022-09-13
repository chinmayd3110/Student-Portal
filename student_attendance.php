<?php
require('connect.php');
include("student_nav_bar.php");
?>

<!DOCTYPE html>
<title>Attendance</title>
<body>
<!-- Page Content -->
<div style="margin-left:20%">

<div class="w3-container w3-teal">
  <h1>Attendance Page</h1>
</div>


<div class="w3-container">
<h2><?php echo $_SESSION['student_id']; ?></h2>
<p>The attendance in respective subjects are: </p>

<p><?php echo $_SESSION['name']; ?></p>
<p><?php echo $_SESSION['department']; ?></p>
<p><?php echo $_SESSION['semester']; ?></p>
<p><?php echo $_SESSION['class']; ?></p>
<?php
  $usn = $_SESSION['student_id'];
  $dept= $_SESSION['department'];
  $semester = $_SESSION['semester'];
  $class = $_SESSION['class'];

  $student_attendance_table = $dept."_".$semester."_".$class."_attendance";

  echo "$student_class_table";
  echo "  ";
  $_SESSION['student_attendance_table']=$student_attendance_table;

  $query = "SELECT * from courses where department='$dept' and semester='$semester' and class='$class'";
  $result=mysqli_query($connection,$query);


  while ($row=$result->fetch_assoc())
  {
    echo $row['course_code'];
    $each_course = $row['course_code'];


    $query1 = "SELECT count(*) as present_classes from $student_attendance_table where course_code='$each_course' and $usn='P'";
    $result1=mysqli_query($connection,$query1);
    $row1=$result1->fetch_assoc();
    echo "  ";
    echo $row1['present_classes'];

    $query2 = "SELECT count(*) as total_classes from $student_attendance_table where course_code='$each_course'";
    $result2=mysqli_query($connection,$query2);
    $row2=$result2->fetch_assoc();
    echo "  ";
    echo $row2['total_classes'];

    echo "  ";
    if($row2['total_classes']=="0")
    {
      echo "0";
    }
    else
    {
      echo $row1['present_classes']/$row2['total_classes']*100;
    }
    ?>
    <form action="complete_attendance.php" method="post">
      <input class="btr" type="submit" name="complete_attendance" value="<?php echo $each_course;?>">
      &nbsp;
    </form>

<?php
    echo "<br>";
  }


 ?>

</div>

</div>

</body>
</html>
