<?php
include_once('database.php');
?>

<!DOCTYPE html>
<div id = "loaderBack" class = "loaderBack">
<div id = "loader"class="loader"></div>
</div>
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
 window.location.href ="ClassroomCreate.php";
}
</script>
<style>

</style>
<script>
function myFunction() {
  myVar = setTimeout(showPage, 2000);
}
             function showPage() {
               document.getElementById("loader").style.opacity = "0";
               document.getElementById("loaderBack").style.opacity = "0";
               document.getElementById("loader").style.height = "0";
               document.getElementById("loaderBack").style.height = "0";
               document.getElementById("loader").style.width = "0";
             }
             </script>

<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="dashboard.css">
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

<body onload="myFunction();" style=" padding: 0px; border-radius:0px; padding:0px; margin:0px;background-color:#222222;">
    <div style="display:inline-block; width:100%; height:15%; padding:0%; margin:0%; background-color:#FFDD33;">

         <div class="logoText" style="float:left; font-family: 'Avant Garde', Avantgarde, 'Century Gothic', CenturyGothic, 'AppleGothic', sans-serif; font-style:italic;background-color:#2222222;" >
                <a href="dashboard.php" style="text-decoration: none;">
                    <h1 class = "Groupify" style="margin-left:20px;background-color:#222222;border-radius:20px 0px 20px 0px;transform:rotate(5deg);padding:4px;">
                        <span class="titleText" >G</span>
                        <span class="titleText" >R</span>
                        <span class="titleText" >O</span>
                        <span class="titleText" >U</span>
                        <span class="titleText" >P</span>
                        <span class="titleText" >I</span>
                        <span class="titleText" >F</span>
                        <span class="titleText" >Y</span>
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
        }
        if(isset($_POST['contact'])){
                    $_SESSION['teacherContact'] = $_POST['contact'];
                    echo"<script>window.location.href = 'Contact.php'</script>";
                }
        ?>


</form>
</th>
    </table>



</div>
</html>