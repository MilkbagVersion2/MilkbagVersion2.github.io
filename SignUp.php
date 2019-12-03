
<?php
include_once("database.php");
?>

<!DOCTYPE html>

<link rel="stylesheet" type="text/css" href="WebTool.css">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<script src="WebTool.js"></script>
<title>Groupify</title>


<body style="background-color:#D0D0D0;padding:0px;border-radius:15px;">
<div style="background-color:white;width:95%; height:100%;margin:0 auto;padding-bottom:7px;">
    <div>

        <img src="Groupify.png" alt="yeet" style="margin-left:35%;">

    </div>
    <div align="center" class="signInUnity" style="margin-left:34%;margin-top:0px; padding:0px;margin-bottom:7px;border-radius:100px;width:35%;
			box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.75);">
        <div class="SignInTitle" style=" margin:0px; padding:0px; ">
            <h1 style="" class="title">Create Sign In</h1>
        </div>
        <div class="signInBox">
            <form  name="SignInForm" method="post">


                <p class="signInTxt">Username</p>
                <input class="username" type="text" name="username" id="username1">
                <p class="signInTxt">Email</p>
                <input class="username" type="text" name="email" id="email">
                <br>
                <p class="signInTxt">Password</p>
                <input class="username" type="password" name="password" id="password1">
                <br>
                <p class="signInTxt">Confirm Password</p>
                <input class="username" type="password" name="passwordCon" id="password2">
                <br>
                <br>
                <button id = "submit" class="submit" name="create" >Create Account</button>


            </form >
        </div>

    </div>
</div>
<p class="signInTxt" style="text-align:center;">Created and Designed by : Josh Wells; Shaun Francis</p>
<br>
</body>

<script>
      $username = document.getElementById('username1');
      $password = document.getElementById('password1');

      $.ajax{
        method="get";

      }

</script>