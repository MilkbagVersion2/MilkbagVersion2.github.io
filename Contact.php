<?php
include_once('database.php');
checkSignin();
?>
<!DOCTYPE html>
<div style= "height:0.5vh;width:100%;background-color:lightgray;">
<div style= "height:0.5vh;width:200%;background-color:red;animation: 2s slidein;float:right;">
</div>
</div>
<head>
<link rel="stylesheet" type="text/css" href="WebTool.css">
<script src="WebTool.js"></script>
<script src="jquery.js"></script>
<meta name="theme-color" content="#000000">
<style>
.signInBox{
width:100%;
text-align:center;
padding-left:0px;
}
.signInTxt{
font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, "AppleGothic", sans-serif;
}
.title{
font-size:35px;
font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, "AppleGothic", sans-serif;
}
.titleText{

      font-size:45pt;margin:0px;padding:0px;color:#222222;-webkit-text-stroke: 1px black;
      }
   .titleTextG{

         font-size:50pt;margin:0px;padding:0px;color:orange; -webkit-text-stroke: 1px black;
         }
.username{
outline:none;padding:3px;border-radius:10px;height:20px;
}

div button{
    display:inline-block;
}
.submit {
    display:inline-block;
    border-radius:10px;
    color: gray;
    width:100%;
    height:35px;
    background: #FFDD33;
    border: none;
}

.submit:hover {
    background: rgba(255, 255, 255, 0.8);
}
::selection {
    background-color: #FFDD33;
    color: #222222;
}
.submit:active {
    box-shadow: inset 0 2px 5px #2370FE;
}
.y{
    font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, "AppleGothic", sans-serif;
}

.signInUnity{
    margin-left:30%;margin-top:45px; padding:0px;
    margin-bottom:100px;border-radius:100px;
    background-color:#222222;
	box-shadow: 0px 0px 5px gray;padding-bottom:65px;width:40%;
}
.Groupify{
    font-style:italic;
    font-family: 'Avant Garde', Avantgarde, 'Century Gothic', CenturyGothic, 'AppleGothic', sans-serif;text-align:center;
}
body{
     padding:0px;border-radius:15px;height:85vh;margin:0px;
    background-color: #FFDD33;
}
.secondaryBody{
    width:95%;
    height:100%;
    margin:0 auto;
    padding-bottom:50px;
}
* {box-sizing: border-box;}
 .input-container {
   display: flex;
   width: 100%;
   margin-bottom: 15px;
 }
 .icon {
   padding: 10px;
   background: dodgerblue;
   color: white;
   margin-left:20%;
   min-width: 50px;
   text-align: center;
 }
 .input-field {
   width: 50%;
   border-radius: 15px;
   padding: 10px;
   background: #FFDD33;
   outline: none;
   transition:0.25s;
   font-size:15px;
 }
 .input-field:focus {
   border: 2px solid dodgerblue;
   border-radius: 0px;
   width:60%;
   background:#FFDD55;
 }
 .input-field:hover {
  }
 .btn {
   background-color: dodgerblue;
   color: white;
   padding: 15px 20px;
   border: none;
   cursor: pointer;
   width: 100%;
   opacity: 0.9;
 }
 *:focus {outline:none}
@keyframes slidein {
  from { transform: scaleX(0); }
  to   { transform: scaleX(1); }
}
</style>
</head>
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<title>Groupify</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body >
<div class="secondaryBody">
<div align="center" class="signInUnity" style="">
<div class="SignInTitle" style="margin:0px; padding:0px; padding-top:4vh;">
<h1 class = "Groupify" style="padding-top:5vh;width:26vw;background-color:#FFDD33;;border-radius:20px 0px 20px 0px;transform:rotate(5deg);padding:4px;">
                        <span class="titleText" >G</span>
                        <span class="titleText" >r</span>
                        <span class="titleText" >o</span>
                        <span class="titleText" >u</span>
                        <span class="titleText" >p</span>
                        <span class="titleText" >i</span>
                        <span class="titleText" >f</span>
                        <span class="titleText" >y</span>
                    </h1>
    <h1 style="color: #FFDD33;" class="title"> Sign In</h1>
</div>
<div class="signInBox">
<form id ="yeet" name="SignInForm" method="post" enctype="multipart/form-data">
<br>
    <div class="input-container">

                        <input style="text-align: center;border:none;height:5vh;margin: 0 auto 10px auto;"class="input-field" type="text" placeholder="Username" name="username">
                      </div>
                    <br>
                      <div class="input-container">

                        <input style="text-align: center;border:none;height:5vh;margin: 0 auto 10px auto;"class="input-field" type="password" placeholder="Password" name="password">
                      </div>
                    <br>
    <br>
    <?php
        if(in_array("user", $_SESSION, TRUE)){
        echo $_SESSION['user']['userId'];
        }
    ?>
    <p style="font-size:15px;color:red;"><?php if(isset($_POST['submit']) && $_POST['submit'] == ''){ echo $_SESSION['error']; } ?></p>
    <div style="margin-left:30%;width:200px;display:block;">
        <button  id = "submit" class="submit"  name="submit" style="animation: bgcolor 10s infinite;">Sign In</button><br>
        <a style="color:rgba(114,137,218,1);font-size:15px;margin:0px;padding:0px;" href="SignUp.php">Dont have a Groupify account?</a>
    </div>
</form>
</div>
</div>
</div>
<p class="signInTxt"  style="text-align:center;">Created and Designed by : Josh Wells, and Shaun Francis</p>
</body>