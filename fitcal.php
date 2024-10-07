<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="make.css">
    <title>FITTNESS CALCULATOR</title>
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
		margin-left: 35%;
		width: 250px;
		box-shadow: 0 15px 25px rgba(129, 124, 124, 0.2);
		height: 300px;
		border-radius: 5px;
		backdrop-filter: blur(5px);
		background-color: rgba(255, 255, 255, 0.2);
		padding: 10px;
		text-align: center;
        transition: 1s;
	}

    .card1:hover{
		        transform: scale(1.3);
		        z-index: 2;
	        }

    .card2 {
		margin-right: auto;
		margin-left: 290%;
		width: 250px;
		box-shadow: 0 15px 25px rgba(129, 124, 124, 0.2);
		height: 300px;
		border-radius: 5px;
		backdrop-filter: blur(5px);
		background-color: rgba(255, 255, 255, 0.2);
		padding: 10px;
		text-align: center;
        transition: 1s;
	}

    .card2:hover{
		        transform: scale(1.3);
		        z-index: 2;
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
                <div class="card1"><br><br>
			        <img src="3373122.png" alt="image" /><br><br><br>
			        <h1><a href="bmical.php" style="color: white;">CALCULATOR</a></h1>
			        
                    <!--<label for="email">email: </label>-->
                    
		        </div>
            </div>
            <div class="column">
                <div class="card2" data-tilt><br>
			        <img src="cal4.png"alt="image" />
                    <h1><a href="bmrcal.php" style="color: white;"> BMR</a></h1><br>
                    <h1><a href="bmrcal.php" style="color: white;">CALCULATOR</a></h1>
			        <!--<h1>VIA</h1>-->
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