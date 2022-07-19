<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../bootstrap.css">

</head>
<body>
    <form id="form" action="auth.php" method="POST">
        <div class="form-group">
            <label for="">Username</label>
            <input type="text" name="user" class="form-control">
</div>
<div class="form-group">
<label for="">Password</label>
<input type="password" name="pass" class="form-control">

</div>
        <div>
        <div>
            <p id="feedback" class="text-danger"></p>
            <button id="login">enter</button>
        </div>
    </form>
    <script>
let button = document.getElementById("login");
button.addEventListener("click",(event)=>{
    event.preventDefault();
    let data = new FormData(document.getElementById("form"));

fetch('auth.php',{
method: 'POST',
body: data
})
.then((response)=>{
    if(response.ok){
        return response.text();
    }
    else{

        throw "Error in AJAX calling";
    }
})
.then((text)=>{
    if(text == "Valid user"){
        document.location.href = "index.php";

    }
    else{
        document.getElementById("feedback").innerText = "Check your credentials";
    }
    console.log(text);

})
;

    //console.log("this code is for override normal behavior");
});

    </script>
</body>
</html>


<?php



?>