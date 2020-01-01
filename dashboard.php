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
</script>
<style>
    .titleText{
        font-size:30pt;margin:0px;padding:0px;color:black;font-weight:1200;
    }

    .titleTextG{
        font-size:35pt;margin:0px;padding:0px;color:red;font-weight:1200;
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
      font-size: 25px;
      color: #818181;
      display: block;
      transition: 0.3s;
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

    @media screen and (max-height: 450px) {
      .sidenav {padding-top: 15px;}
      .sidenav a {font-size: 18px;}
    }

.submit {
    display:inline-block;
    border-radius:10px;
    color: white;
    width:70px;
    height:35px;
    background: #4C8FFB;
    border: 1px #3079ED solid;
    box-shadow: inset 0 1px 0 #80B0FB;
}

.submit:hover {
    border: 1px #2F5BB7 solid;
    box-shadow: 0 1px 1px #EAEAEA, inset 0 1px 0 #5A94F1;
    background: #3F83F1;
}

.submit:active {
    box-shadow: inset 0 2px 5px #2370FE;
}
button{
    font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, "AppleGothic", sans-serif;
}
</style>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DASHBOARD</title>
</head>

<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="Profile.php">PROFILE OPTIONS</a>
</div>

<body style="background-image: url('memphis-colorful.png'); padding: 0px; border-radius:0px; padding:0px; margin:0px;">
    <div style="display:inline-block; width:100%; height:15%; padding:0%; margin:0%; background-color:lightGrey;">

         <div class="logoText" style="float:left; font-family: 'Avant Garde', Avantgarde, 'Century Gothic', CenturyGothic, 'AppleGothic', sans-serif; font-style:italic;" >
                <a href="dashboard.php" style="text-decoration: none;">
                    <h1 class = "Groupify" style="margin-left:3px">
                        <span class="titleTextG" >G</span>
                        <span class="titleTextG" >r</span>
                        <span class="titleTextG" >o</span>
                        <span class="titleTextG" >u</span>
                        <span class="titleTextG" >p</span>
                        <span class="titleText" >i</span>
                        <span class="titleText" >f</span>
                        <span class="titleText" >y</span>
                    </h1>
                    </a>
                </div>

            <span style="font-size:30px;cursor:pointer; display:inline-block; float:right; margin-top:40px; margin-right:20px;" onclick="openNav()">My Account▼</span>
        </div>

</body>
<div style="margin-top: 0px; display:inline-block; float:left;">
 <table style="border-collapse:collapse; width:100%;">
 <th>

  <form id ="yeet" name="SignInForm" method="post" enctype="multipart/form-data">
<?php
 for($j=0;$j<$_SESSION['rowcount'];$j++){echo "<button style='height:22vh; width:22vw;margin:10px;' id = 'class' class='submit' name = 'class' href='classroom.php'>Classroom</button>";}

 if(isset($_POST['n'])&&$_POST['n'] == ''){
             $_SESSION['rowcount'] = 0;
             unset($_POST['n']);
             echo"<script>window.location.href = 'dashboard.php';</script>";
         }
         if(isset($_POST['class']) && $_POST['class'] == ''){
                     echo"<script>window.location.href = 'classroom.php';</script>";
                     unset($_SESSION['n']);
                 }?>
        <?php
        echo "<button style='height:22vh; width:22vw;margin:10px;' id = 'y' class='submit' name = 'y'>+</button>";

        if(isset($_POST['y']) && $_POST['y'] == ''){
            $_SESSION['rowcount']++;
            echo"<script>window.location.href = 'dashboard.php';</script>";
        }?>


</form>
</th>
    </table>
    <form id ="yeet" name="SignInForm" method="post" enctype="multipart/form-data">
<button id = "n" class="submit" name = "n" >Reset</button>
</form>


</div>
</html>