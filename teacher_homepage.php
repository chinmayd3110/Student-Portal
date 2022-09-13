<?php
require('connect.php');
session_start();
//Teacher file. Displays teacher data. Directs to particular class.
$t_id = $_SESSION['teacher_id'];
$query="SELECT * FROM teacher_info where teacher_id='$t_id'";
$result=mysqli_query($connection,$query);

$row = $result->fetch_assoc();

$name=$row['name'];
$department=$row['department'];

echo $name;

echo "<br>";

echo $department;

$query="SELECT * FROM courses where teacher_id='$t_id'";
$result=mysqli_query($connection,$query);
 echo "<br>The courses that you handle are: <br>";
 ?>
 <!DOCTYPE html>
 <html>
 <head>
   <title>Teacher home_page</title>
   <style>

       .inputs{
           font-size: 20px;
           padding-bottom: 8px;
           margin-bottom: 70px;
           border: 0;
           border-bottom: 1px solid #ccc;
           width: 20%;
           padding-top: 10px;

           margin-top: 30px;
       }


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
 <form action="specific_class.php" method="post">


  <div>
    <select class="inputs" name="teach">
      <?php

      while($row = $result->fetch_assoc())
      {
                $course=$row['course_code'];
                $dept=$row['department'];
                $sem=$row['semester'];
                $sec=$row['section'];

                $total=$course."-".$dept."_".$sem."_".$sec;

              ?>
                  <option value="<?php echo $total?>"  > <?php echo $total; ?> </option>

            <?php

      }
      ?>
    <select/>
  </div>

   <div>
     <input id="btn" type="submit" name="submit" value="submit">
   </div>

 </form>
</body>
 </html>

 <?php





  ?>
