<?php
$servername = "localhost";
$username = "milkbag19";
$password = "yeet";
$database = "userinfo";

// Create connection

$mysqli = new mysqli($servername, $username, $password, $database);
// Check connection
if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
}
    function upload(){
    $servername = "localhost";
    $username = "milkbag19";
    $password = "yeet";
    $database = "userinfo";

    $emailInput = $_POST['email'];
    $usernameInput = $_POST['username'];
    $passwordInput = $_POST['password'];
    $passwordConfirm = $_POST['passwordCon'];
    if($passwordInput===$passwordConfirm){
        if($emailInput!=""&&$usernameInput!=""&&$passwordInput!=""){
            $mysqli = new mysqli($servername, $username, $password, $database);

            $searchquery = "SELECT * FROM usernames WHERE `username` LIKE '%{$usernameInput}%'";
            $searchresult = $mysqli->query($searchquery);
            $row = $searchresult->fetch_assoc();
            if($row['username']==null){
                        $upload = "INSERT INTO usernames (username,password,email) VALUES ('$usernameInput','$passwordInput','$emailInput')";
                        if ($mysqli->query($upload) === TRUE) {
                            //echo "New record created successfully";
                        } else {
                            //echo "Error: " . $upload . "<br>" . $mysqli->error;
                        }
                }else{
                    echo "<script>alert('username already in use');</script>";
                }
        }else{
            echo "<script>alert('fields must all be entered');</script>";
        }
    }else{
        echo "<script>alert('passwords must match');</script>";
    }


    }

function signIn(){
$servername = "localhost";
$username = "milkbag19";
$password = "yeet";
$database = "userinfo";

$usernameInput = $_POST['username'];
$passwordInput = $_POST['password'];
$string = $usernameInput;

$searchquery = "SELECT * FROM usernames WHERE `username` LIKE '%{$string}%'";
//  ----------------------------------------------------------------^^^-------^^^

            $mysqli = new mysqli($servername, $username, $password, $database);
            $searchresult = $mysqli->query($searchquery);
        $row = $searchresult->fetch_assoc();
        if($usernameInput === $row['username']&&$passwordInput === $row['password']){
        header("Location: SignUp.php");
        }else{
             echo "<script>alert('incorrect username/password');</script>";
         }




}

if(isset($_POST["submit"])) {
    signIn();
}
if(isset($_POST["create"])){
    upload();
}
?>