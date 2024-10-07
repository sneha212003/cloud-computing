<?php
    $insert = false;
    if(empty($_POST['name'])){
        echo "<script> alert ('insert all the data');</script>";
    }
    else{
            $server = "localhost";
            $username = "root";
            $password = "";
            $con = mysqli_connect($server, $username, $password);

        // Check for connection success
            if(!$con){
            die("connection to this database failed due to" . mysqli_connect_error());
            }
        //echo "Success connecting to the Database.";

            $name = $_POST['name'];
            $age = $_POST['age'];
            $gender = $_POST['gender'];
            $locality = $_POST['locality'];
            $email = $_POST['email'];
            $phone = $_POST['phone']; 
            
                $sql=" INSERT INTO `gym`.`gym1` (`name`, `age`, `gender`, `locality`, `email`, `phone`, `dt`) 
                VALUES ('$name', '$age', '$gender', '$locality', '$email', '$phone', current_timestamp());";
            
        
        if($con->query($sql)==true){
            echo "<script> alert ('Successfully inserted');</script>";
            $insert=true;
        }
        else{
            echo "ERROR $sql <br> $con->error"; 
        }
        $con->close();

    }
       
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fitness</title>
</head>
<link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
<style>
    /* CSS Reset */
    body {
        font-family: 'Baloo Bhai', cursive;
        color: white;
        margin: 0px;
        padding: 0px;
        background: url(Black-Design.webp);
    }

    .left {
        display: inline-block;
        /* border: 2px solid red; */
        position: absolute;
        left: 60px;
        top: 20px;
    }

    .left img {
        width: 116px;    
    }

    .left div {
        line-height: 19px;
        font-size: 26px;
        text-align: center;
    }

    .mid {
        display: block;
        width: 36%;
        margin: 29px auto;
        /* border: 2px solid green; */
    }

    .right {
        position: absolute;
        right: 34px;
        top: 43px;
        display: inline-block;
        /* border: 2px solid yellow; */
    }

    .navbar {
        display: inline-block;
    }

    .navbar li {
        display: inline-block;
        font-size: 25px;
    }

    .navbar li a {
        color: white;
        text-decoration: none;
        padding: 34px 23px;

    }

    .navbar li a:hover,
    .navbar li a.active {
        text-decoration: underline;
        color: grey;

    }
    

    .btn {
        font-family: 'Baloo Bhai', cursive;
        margin: 0px 9px;
        background-color: black;
        color: white;
        padding: 4px 14px;
        border: 2px solid grey;
        border-radius: 10px;
        font-size: 20px;
        cursor: pointer;
    }

    .btn:hover {
        background-color: rgb(31, 30, 30);
    }

    .container {
       
        margin: 106px 400px;
        padding: 75px;
        width: 33%;
        border-radius: 28px;
    }

    .form-group input {
        font-family: 'Baloo Bhai', cursive;
        text-align: center;
        display: block;
        width: 508px;
        padding: 1px;
        border: 2px solid black;
        margin: 11px auto;
        font-size: 25px;
        border-radius: 8px;
    }

    .container h1 {
        text-align: center;
    }

    .container button {
        display: block;
        width: 74%;
        margin: 20px auto;
    }
</style>

<body>
    <header class="header">
        <!-- Left box for logo -->
        <div class="left">
            <img src="gym.png" alt="">
            <div>Be Healthy</div>
        </div>
        <!-- Mid box for navbar -->
        <div class="mid">
            <ul class="navbar">
            <!--    <button class="btn">Home</button>
                <button class="btn">Fitness Calculator</button>
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Fitness Calculator</a></li>
                <li><a href="#">Contact Us</a></li> -->
            </ul>
        </div>

        <!-- Right box for buttons -->
        <div class="right">
            <button class="btn"><a href="gym.php" style="color: white;">Home</a></button>
            <button class="btn"><a href="fitcal.php" style="color: white;">Fitness Calculator</a></button>
            <!--<button class="btn">Call Us Now</button> -->
            <button class="btn"><a href="contact.php" style="color: white;">Contact Us</a></button>
        
        </div>
    </header>
    <div class="container">
        <h1>Join the best gym of Andaman now</h1>
        <form action="gym.php" method="post" id="form">
            <div class="form-group">
                <input type="text" name="name"id="Name" placeholder="Enter your Name">
            </div>
            <div class="form-group">
                <input type="text" name="age" id="age"placeholder="Enter your Age">
            </div>
            <div class="form-group">
                <input type="text" name="gender" id="gender"placeholder="Enter your Gender">
            </div>
            <div class="form-group">
                <input type="text" name="locality" id="locality" placeholder="Enter your Locality">
            </div>
            <div class="form-group">
                <input type="text" name="email" id="email" placeholder="Enter your Email Id">
            </div>
            <div class="form-group">
                <input type="text" name="phone" id="phone" placeholder="Enter your Phone Number">
            </div>
            <button class="btn" id="submit" type ="submit">Submit</button>
        </form>
        <script>
            

            
        </script>

        
    </div>

    
    
    <script src=""></script>
    
</body>

</html>
