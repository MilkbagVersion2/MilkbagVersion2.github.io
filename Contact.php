<?php
include_once('database.php');
?>
<!DOCTYPE html>
<div style= "height:0.5vh;width:100%;background-color:lightgray;">
<div style= "height:0.5vh;width:200%;background-color:red;animation: 2s slidein;float:right;">
</div>
</div>
<head>
<link rel="stylesheet" type="text/css" href="index.css">
<script src="WebTool.js"></script>
<script src="jquery.js"></script>
<meta name="theme-color" content="#000000">
<style>

</style>
</head>
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<title>Groupify</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body >
<div class="secondaryBody">
<div align="center" class="signInUnity" style="">
<div class="SignInTitle" style="margin:0px; padding:0px; padding-top:4vh;">

    <h1 style="color: #FFDD33;" class="title">Notify your teacher</h1>
</div>
<div class="signInBox">
<form id ="yeet" name="SignInForm" method="post" enctype="multipart/form-data">
<br>
    <div class="input-container">
                        <textarea style="text-align: center;border:none;height:15vh;margin: 0 auto 10px auto;"class="input-field" type="text" placeholder="Message" name="Message"></textarea>
                      </div>

    <br>

    <p style="font-size:15px;color:red;"><?php if(isset($_POST['submit1']) && $_POST['submit1'] == ''){ sendMessage(); } ?></p>
    <div style="margin-left:30%;width:200px;display:block;">
        <button  id = "submit1" class="submit"  name="submit1" style="animation: bgcolor 10s infinite;">Send</button><br>
    </div>
</form>
</div>
</div>
</div>
<p class="signInTxt"  style="text-align:center;">Created and Designed by : Josh Wells, and Shaun Francis</p>
</body>