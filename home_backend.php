
<?php
// Checks whether user details inputted is valid. Directs flow to either student or teacher files
require('connect.php');
session_start();


if(isset($_POST['login']))
{
  $userid=$_POST['userid'];
  $password=$_POST['password'];

  $query="SELECT * FROM login_details where userid='$userid' and password='$password'";
  $result=mysqli_query($connection,$query);


  if((mysqli_num_rows($result))==1)
  {
      if($_POST['user']=='teacher')
      {
        $_SESSION['loggedin'] = true;
        $_SESSION['teacher_id'] = $userid;
        header("Location: teacher_homepage.php");
      }
      else
      {
        $query2 = "SELECT * FROM student_info where usn='$userid'";
        $result2=mysqli_query($connection,$query2);
        $row2=$result2->fetch_assoc();
        $_SESSION['name'] = $row2['name'];
        $_SESSION['department'] = $row2['department'];
        $_SESSION['semester'] = $row2['semester'];
        $_SESSION['class']=$row2['class'];
        $_SESSION['loggedin'] = true;
        $_SESSION['student_id'] = $userid;

        header("Location: student_homepage.php");
      }
  }


  else
  {
      die("USER DOES NOT EXIST");

  }







}



 ?>
