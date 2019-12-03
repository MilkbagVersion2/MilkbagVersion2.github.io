<?php
include_once('database.php');
?>



<!DOCTYPE html>

<link rel="stylesheet" type="text/css" href="WebTool.css">
<script src="WebTool.js"></script>
<script src="jquery.js"></script>
<script>

$(window).ready(function(){
        var username = $('#username1').value;
        $.post("community.php", {
                hash: hash
            });
});

</script>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<title>Groupify</title>

<body style="background-color:#D0D0D0;padding:0px;border-radius:15px;">
<div style="background-color:white;width:95%; height:100%;margin:0 auto;padding-bottom:50px;">
<div>

    <img src="Groupify.png" alt="yeet" style="margin-left:35%;">

</div>

<div align="center" class="signInUnity" style="
            margin-left:35%;margin-top:45px; padding:0px;
            margin-bottom:100px;border-radius:100px;width:35%;
			box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.75);">


<div class="SignInTitle" style="margin:0px; padding:0px; ">
    <h1 style="" class="title">Sign In</h1>
</div>
<div class="signInBox">
<form id ="yeet" name="SignInForm" method="post">


    <p class="signInTxt">Username</p>
    <input class="username" type="text" name="username" id="username1">
    <p class="signInTxt">Password</p>
    <input class="username" type="password" name="password" id="password1">
    <br>
    <br>
    <button style="//margin-left:35px;width:70px;height:35px;" id = "submit" class="submit"  name="submit">Sign In</button>


</form>
     <br>
    <a href="signUp.php" style="width:150px;">No account?</a>
</div>

</div>
</div>

</body>