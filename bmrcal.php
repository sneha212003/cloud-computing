       <!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>BMR CALCULATOR</title>
</head>
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
<!------------------------BMI CALCULATOR BOX------------------>
    
    <div class="container">
        <div class="box">
          <h1>BMR CALCULATOR</h1>
          <div class="content">


            <div class="input">
                <label for="height">Age</label>
                <input type="text" class="text-input" id="age" autocomplete="off" required/>
            </div>

            <div class="gender">

                <label class="container">
                    <input type="radio" name="radio" id="m"><p class="text">Male</p>
                    <span class="checkmark"></span>
                  </label>


                <label class="container">
                    <input type="radio" name="radio" id="f" ><p class="text">Female</p>
                      <span class="checkmark"></span>
                    </label>

            </div>

            <div class="containerHW">
            <div class="inputH">
              <label for="height">Height(cm)</label>
              <input type="number" id="height" required>
            </div>

            <div class="inputW">
              <label for="weight">Weight(kg)</label>
              <input type="number" id="weight" required>
            </div>
          </div>

            <button class="calculate" id="submit" onclick="calculate();">Calculate BMR</button>
          </div>
          <div class="result">
            <p>Your BMR is</p>
            <div id="result"><span class="calories"> 00.00</span>Calorie/Day</div>
            <p class="comment"></p>
          </div>
        </div>
      </div>
 <!---The Modal----> 
    <div id="myModal" class="modal">
      <!---Modal content--->  
    <div class="modal-content">
      <span class="close">&times;</span>
      <p id="modalText"></p>
    </div></div>


    
<script src="bmr1.js"></script>

</body>
</html>