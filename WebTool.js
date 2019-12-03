function signIn(a,b){
if(a == "milkbag19"&&b=="urmomdotcom"){

    document.getElementById("y").value = "";
    window.location.href = "signUp.html";
}else{
    document.getElementById("y").value = "invalid username/password";
    }
}function signUp(a,b,c,e){
var a = false;
if(e.includes(".ca")||e.includes(".com")||e.includes(".au")||e.includes(".org")){
    if(e.includes("@")){
    a = true;
    }
}

 if(a != ""&&b==c&&a == true){
    alert("yeet");
     document.getElementById("y").value = "";
 }else if(a!=""&&b!=c&&a == true){
    document.getElementById("y").value = "passwords must match";
 }else if(a==""&&b==c&&a==true){
     document.getElementById("y").value = "invalid username";
     }
  else if(a!=""&&b==c&&a == false){
     document.getElementById("y").value = "invalid email";
  }
  else{
    document.getElementById("y").value = "invalid inputs";
  }
 }

function sendUserInfo() {
       $.ajax({
            method: "POST",
            url: 'database.php',
            data:{action:'call_this'},
            success:function(data) {
              alert(data);
            }

       });
  }