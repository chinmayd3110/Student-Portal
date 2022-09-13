<?php
require('connect.php');
include("student_nav_bar.php")
?>


<!DOCTYPE html>
<html>
<title>Student home page</title>
<body>

<!-- Sidebar -->

<!-- Page Content -->
<div style="margin-left:20%">

<div class="w3-container w3-teal">
  <h1>Home Page</h1>
</div>


<div class="w3-container">
<h2><?php echo $_SESSION['student_id']; ?></h2>
<p>The sidebar with is set with "style="width:25%".</p>
<p><?php echo $_SESSION['name']; ?></p>
</div>

</div>

</body>
</html>
