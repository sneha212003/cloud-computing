<?php
    $insert = false;
    if(empty($_POST['email']) ||empty($_POST['query']) ){
        echo "<script> alert (' !!!!!  ): INSERT ALL THE DATA :(  !!!!  ');</script>";
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

            $email = $_POST['email'];
            $query = $_POST['query'];
                        
                $sql=" INSERT INTO `gym`.`contact1` (`email`,`query`,`date`) 
                VALUES ('$email', '$query',current_timestamp());";
            
        
        if($con->query($sql)==true){
            echo "<script> alert (' (: YOUR FORM IS SUCCESSFULLY SUBMITTED :)    ');</script>";
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="make.css">
    <title>Contact_us</title>
</head>

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
       
        margin: 106px 260px;
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

    .container img{
        filter: invert(100%);
        height: 90px;
        width: 90px;
    }

    .container .img h2{
        text-align: center;
    }

    .card1 {
        margin-right: auto;
		margin-left: -250%;
		width: 750px;
		box-shadow: 0 15px 25px rgba(129, 124, 124, 0.2);
		height: 500px;
		border-radius: 5px;
		backdrop-filter: blur(5px);
		background-color: rgba(255, 255, 255, 0.2);
		padding: 10px;
		text-align: center;
	}

    .card2 {
        margin-top: 90%;
		margin-right: auto;
		margin-left: 435%;
		width: 250px;
		box-shadow: 0 15px 25px rgba(129, 124, 124, 0.2);
		height: 300px;
		border-radius: 5px;
		backdrop-filter: blur(5px);
		background-color: rgba(255, 255, 255, 0.2);
		padding: 10px;
		text-align: center;
	}

    .column {
        float: left;
        width: 25%;
        padding: 0 10px;
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
        <div class="row">
            <div class="column">
                <div class="card1">
			        <img src="mail2.webp" alt="image" /><br><br><br>
			        <!--<h1>VIA</h1>
			        <h1>Email</h1>
                    <label for="email">email: </label>
                    <input type="email" id="email" name="email">-->
                    <form action="contact.php"method="post">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                          <label for="textfield">Query</label>
                          <input type="textfield" class="form-control" id="textfield" name=" query" placeholder="Enter your Query">
                        </div>
                        <!--<div class="form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>-->
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
		        </div>
            </div>
            <div class="column">
                <div class="card2" data-tilt>
			        <img src="CALL.webp" alt="image" />
			        <!--<h1>VIA</h1>--><br><br>
			        <h1>Call</h1>
                    <h2>9679513332</h2>
                </div>
            </div>
        <!--<div class="card" data-tilt>
            <a href="data.html" class="cyan-text text-darken-4">
            <img src="mail2.webp"></a>
            <h2>Email</h2>
        </div>-->
        </div>
    </div> 
</body>
</html>