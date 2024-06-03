<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-image: url("https://w0.peakpx.com/wallpaper/730/402/HD-wallpaper-3d-black-green-square-boxes-abstract.jpg");
            background-size: 100%;
        }

        
        h2{
            text-align: center;
            position: relative; 
            font-size: 30px;
            color: rgb(53, 229, 29);
            
        }
        .container{
            
        border: solid,2px,black;
        background-color: rgb(23, 22, 22);
           height: 400px;
           width: 300px;
           margin-left:38%;
           margin-top: 10%;
        
        }
        .from{

          
        }
        .inp1{
            font-size: 18px;
            border: none;
            height: 35px;
            padding-left: 20px;
            background-color: rgb(34, 33, 33) ;
            margin-top: 20px;
            margin-left: 25px;    
        }
        .inp2{
            margin-top: 40px;
            margin-left: 25px;
            color: black;
            background-color:rgb(53, 229, 29);
            border: none;
            font-size: 20px;
            text-align: center;
            height: 40px;
            width: 250px;            
        }
        p{
            font-size: 16px;
            margin-top:30px;
            color:rgba(255, 255, 255, 0.703);
            margin-left: 25px;
        }
        .inp1:hover{
            color:white;
            font-family:serif;
        }
    </style>
</head>
<body>
    
    
<div class="container">
    <h2>LOGIN FORM</h2>
    <div class="from">
<form action="" method="post">
    

        <input class="inp1" type="email" name="email" placeholder="email" required>
    
        <input class="inp1" type="password" name="pass" placeholder="Password" required>
        <p >forgot password</p>
        <input class="inp2" type="submit" name="sub" value="LOGIN">
    
    </div>
</form>
</div>
</body>
</html>
<?php

include ("welcome.php");



if (isset($_POST["sub"])) 
{    
    $remail = $_POST["email"];
    $rpassword = $_POST["pass"];

    $query = "INSERT INTO `student`(`std_email`,`std_password`)VALUES('$remail','$rpassword')";   
    $row = mysqli_query($db,$query);
    if ($row==true) {
        echo "<script>alert('data insert')</script>";
    }
    else {
        echo "<script>alert('try again')</script>";
    }

    
}


?>