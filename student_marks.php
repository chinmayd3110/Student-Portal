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
      <h1>Marks Page</h1>
    </div>


    <div class="w3-container">
    <h2><?php echo $_SESSION['student_id']; ?></h2>
    <p>The marks you have taken are:</p>
    <p>The  the pageame value.</p>
    </div>

    

</div>


</body>
</html>
