<?php
require('connect.php');
include("student_nav_bar.php");
?>

<!DOCTYPE html>
<title>Courses</title>
<body>
<!-- Page Content -->
<div style="margin-left:20%">

<div class="w3-container w3-teal">
  <h1>Courses Page</h1>
</div>


<div class="w3-container">
<h2><?php echo $_SESSION['student_id']; ?></h2>
<p>The courses you have taken are:</p>
<p><?php echo $_SESSION['name']; ?></p>
<p><?php echo $_SESSION['department']; ?></p>
<p><?php echo $_SESSION['semester']; ?></p>
<p><?php echo $_SESSION['class']; ?></p>
</div>

</div>

</body>
</html>
