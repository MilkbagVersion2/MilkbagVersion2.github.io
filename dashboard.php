<?php
include_once('database.php');
?>

<!DOCTYPE html>
<script>
    function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}
function closeNav() {
  document.getElementById("mySidenav").style.width = "0px";
}
    function openJoin() {
  document.getElementById("joinbtn").style.height = "350px";
}
function closeJoin() {
  document.getElementById("joinbtn").style.height = "0px";
}
function openCreate(){
 window.location.href ="classroomCreate.php";
}
</script>
<style>
    .titleText{
        font-size:45pt;margin:0px;padding:0px;font-weight:1200;color: #FFDD33;
        font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, "AppleGothic", sans-serif;
    }
    body{

    }
    .titleTextG{
        font-size:45pt;margin:0px;padding:0px;color:black;font-weight:1200;
    }

    .logoText{
        display:inline-block;
    }

    .sidenav {
      height: 100%;
      width: 0;
      position: fixed;
           z-index: 1;
           top: 0;
           right: 0;
           background-color: #111;
           overflow-x: hidden;
           transition: 0.5s;
           padding-top: 60px;
          text-align:right;
    }

    .sidenav a {
      padding: 8px 8px 8px 32px;
      text-decoration: none;
      font-size: 35px;
      color: #818181;
      display: block;
      transition: 0.3s;
      font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, "AppleGothic", sans-serif;
    }

    .sidenav a:hover {
      color: #f1f1f1;
    }

    .sidenav .closebtn {
      position: absolute;
      top: 0;
      right: 25px;
      font-size: 36px;
      margin-left: 50px;
    }
    .joinMenu .closebtn {
      position: absolute;
      top: 0;
      right: 25px;
      font-size: 36px;
      margin-left: 50px;
    }
    .joinMenu a:hover {
          color: #f1f1f1;
        }
    .joinMenu a {
          padding: 8px 8px 8px 32px;
          text-decoration: none;
          font-size: 25px;
          color: #818181;
          display: block;
          transition: 0.3s;
        }
        @keyframes animatedgradient {
        	0% {
        		background-position: 0% 50%;
        	}
        	50% {
        		background-position: 100% 50%;
        	}
        	100% {
        		background-position: 0% 50%;
        	}
        }

        .joinMenu{
        border: 10px solid black;
        border-color: red red black red;
        }

    @media screen and (max-height: 450px) {
      .sidenav {padding-top: 15px;}
      .sidenav a {font-size: 18px;}
      .joinMenu {padding-top: 15px;}
      .joinMenu a {font-size: 18px;}
    }

.submit {
    display:inline-block;
    border-radius:10px;
    transition:0.25s;
    position:relative;
    color: white;
    width:6vw;
    height:5vh;
    background: #4C8FFB;
    border: none;
    overflow-x: hidden;
     font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, "AppleGothic", sans-serif;
}

.submit:hover {
    background: #3F83F1;
    opacity:0.9;
}
.submit1 {
    display:inline-block;
    border-radius:5px;
    font-size:30px;
    color: #2222222;
    background:#FFDD33;
    border: 1px #3079ED solid;
    box-shadow: inset 0 1px 0 #80B0FB;


}
.submit1:hover{
    cursor:pointer;
    opacity:0.8;
    height:6vh;
}

.submit:active {
    box-shadow: inset 0 2px 5px #2370FE;
}
*:focus {outline:none}
button{
    font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, "AppleGothic", sans-serif;
}
.classBox{
height:22vh;
width:22vw;
margin:10px;
text-align:center;
display:inline-block;
background:#FFDD33;
border-radius:10px;
border: 1px solid gray;
transition:0.25s;
}
.classBox:hover{
    cursor:pointer;
    opacity:0.75;
}
.logout{
      padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 35px;
            margin-top:25vh;
            color: #818181;
            display: block;
            transition: 0.3s;
            background-color:#111;
            border:none;
            float:right;
}
.logout:hover{
color: #f1f1f1;
}
@keyframes slidein {
  from { transform: scaleX(0); }
  to   { transform: scaleX(1); }

}
@keyframes txtcolor {
    0% {
             color: red;
         }

         10% {
             color: green;
         }

         20% {
             color: blue;
         }

         30% {
             color: black;
         }

         40% {
             color: purple;
         }
         50% {
             color: red;
         }

         60% {
             color: green;
         }

         70% {
             color: blue;
         }

         80% {
             color: black;
         }

         100% {
             color: purple;
         }
}
</style>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Groupify</title>
</head>
<div style= "height:0.5vh;width:100%;background-color:lightgray;">
<div style= "height:0.5vh;width:200%;background-color:red;animation: 2s slidein;float:right;">

</div>
</div>
<div id="mySidenav" class="sidenav">
    <?php

    ?>

    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <?php
        $username = $_SESSION['user']['username'];
        echo"<a href='Profile.php'>$username</a>";
        $_SESSION['currentClass']=null;
    ?>

    <form id ="lol" name="SignInForm" method="post" enctype="multipart/form-data">
    <button name="logout" id="logout" class="logout">LOG OUT</button>
    <?php
        if(isset($_POST['logout'])){
            $_SESSION['user']=null;
            echo"<script>window.location.href = 'index.php';</script>";
        }
    ?>
    </form>
</div>
<div style="-webkit-animation:Background 5s infinite alternate; border-radius:50px;margin-top:-50px;margin-bottom:50px;height:0;width:600px; position: fixed;z-index: 1;top: 0;left: 27%;background-color: #111;overflow-x: hidden;transition: 0.5s;padding-left: 60px;text-align:right;overflow: hidden;" id="joinbtn" class="joinMenu">
<a href="javascript:void(0)" class="closebtn" onclick="closeJoin()"style="margin-top:7%;">&times;</a>
<h1 class = "Groupify" style="margin-top:15%;margin-right:33%;z-index: 1;">
                        <span class="titleText" >C</span>
                        <span class="titleText" >l</span>
                        <span class="titleText" >a</span>
                        <span class="titleText" >s</span>
                        <span class="titleText" >s</span>
                        <span class="titleText" >C</span>
                        <span class="titleText" >o</span>
                        <span class="titleText" >d</span>
                        <span class="titleText" >e</span>
                    </h1>
                    <form id ="lol" name="SignInForm" method="post" enctype="multipart/form-data">
                    <button class='submit' id='join' name='join'>Join</button>
                    <input type="text" style="margin-top:0;margin-right:24%;height:8%;width:50%;background-color:#111;border:none;border-bottom: 5px solid white;color:gray;caret-color: rgb(200, 200, 200);" placeholder="Example '45676'" name="codeInput">

</form>
<?php
 if(isset($_POST['join']) && $_POST['join'] == ''){
                    classJoin();
                     echo"<script>window.location.href = 'dashboard.php';</script>";
                     unset($_SESSION['join']);
                 }
?>
</div>

<body style=" padding: 0px; border-radius:0px; padding:0px; margin:0px;background-color:#222222;">
    <div style="display:inline-block; width:100%; height:15%; padding:0%; margin:0%; background-color:#FFDD33;">

         <div class="logoText" style="float:left; font-family: 'Avant Garde', Avantgarde, 'Century Gothic', CenturyGothic, 'AppleGothic', sans-serif; font-style:italic;background-color:#2222222;" >
                <a href="dashboard.php" style="text-decoration: none;">
                    <h1 class = "Groupify" style="margin-left:20px;background-color:#222222;border-radius:20px 0px 20px 0px;transform:rotate(5deg);padding:4px;">
                        <span class="titleText" >G</span>
                        <span class="titleText" >r</span>
                        <span class="titleText" >o</span>
                        <span class="titleText" >u</span>
                        <span class="titleText" >p</span>
                        <span class="titleText" >i</span>
                        <span class="titleText" >f</span>
                        <span class="titleText" >y</span>
                    </h1>
                    </a>
                </div>
            <span style="font-size:50px;cursor:pointer; display:inline-block; float:right; margin-top:20px; margin-right:20px;" onclick="openNav()">&#9776;</span>
            <span style="text-align:center;background-color:green;font-size:30px;cursor:pointer; display:inline-block; float:right; margin-top:40px; margin-right:20px;width:7vw;background-color:#222222;color:#FFDD33;" class="submit" onclick="openJoin()">Join</span>
            <span style="text-align:center;background-color:green;font-size:30px;cursor:pointer; display:inline-block; float:right; margin-top:40px; margin-right:20px;width:10vw;background-color:#222222;color:#FFDD33;box-shadow:none;" class="submit" onclick="openCreate()">Create</span>

        </div>



</body style="height:100%;">
<div style="margin-top: 0px; display:inline-block; float:left;">
 <table style="border-collapse:collapse; width:100%;">
 <th >

  <form id ="yeet" name="SignInForm" method="post" enctype="multipart/form-data">
<?php

 classSelect();

         if(isset($_POST['class']) && $_POST['class'] != ''){
                     $_SESSION['currentClass'] = $_POST['class'];
                     echo"<script>window.location.href = 'classroom.php';</script>";
                     unset($_SESSION['class']);
                 }?>
        <?php
        if(isset($_POST['y']) && $_POST['y'] == ''){
            echo"<script>window.location.href = 'ClassroomCreate.php';</script>";
        }?>


</form>
</th>
    </table>



</div>
</html>