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
        </div>
            <span style="font-size:30px;cursor:pointer; display:inline-block; float:right; margin-top:40px; margin-right:20px;" onclick="openNav()">My Account▼</span>
        </div>
</body>
</html>