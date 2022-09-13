<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" >
    <title>Register form</title>
    <style>
    .btr{
                background-color: maroon;
                padding-top: 5px;
                padding-bottom: 5px;
                font-size: 13px;
                border: none;
                color: aliceblue;
                padding-left: 13px;
                padding-right: 13px;
             }
        #forms{
            width: 300px;
            background-color:white;
            padding: 20px;
            margin-left: auto;
            margin-right: auto;

        }
    </style>
</head>

<body style="background-color: #C0C0C0">


    <h1 style="text-align: center; font-size: 40px">Log in</h1>



    <form id="forms" action = "home_backend.php" method="post">

      <div>

          <input type="radio" name="user" value="student">Student</input>
          <input type="radio" name="user" value="teacher">Teacher</input>

      </div>


      <div>
          <p class="labels">Enter userid:</p>
          <br/>
          <input class="input" type="text" name="userid">
      </div>

        <div>
            <p class="labels">Enter password:</p>
            <br/>
            <input class="input" type="password" name="password">
        </div>





        <div>
          <br>
            <input class="btr" type="submit" name="login" value="Login">
            &nbsp;
            <input class="btr" type="reset" name="reset" value="Reset">
            <br>
            <br>

            <br>
            <br>

        </div>




    </form>
