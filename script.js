var age = document.getElementById("age");
var height = document.getElementById("height");
var weight = document.getElementById("weight");
var male = document.getElementById("m");
var female = document.getElementById("f");
let resultArea = document.querySelector(".comment");

var modal = document.getElementById("myModal");
var modalText = document.querySelector("#modalText");
var span = document.getElementsByClassName("close")[0];

// Function to calculate BMI
function calculate() {
  console.log("Calculating BMI..."); // Debugging log
  if (age.value === '' || height.value === '' || weight.value === '' || (!male.checked && !female.checked)) {
    modal.style.display = "block";
    modalText.innerHTML = `All fields are required!`;
    console.log("Missing inputs"); // Debugging log
  } else {
    countBmi();
  }
}

// Function to compute BMI and display result
function countBmi() {
  var bmi = Number(weight.value) / ((Number(height.value) / 100) ** 2);
  var result = '';

  if (bmi < 18.5) {
    result = 'Underweight';
  } else if (bmi >= 18.5 && bmi <= 24.9) {
    result = 'Healthy';
  } else if (bmi >= 25 && bmi <= 29.9) {
    result = 'Overweight';
  } else if (bmi >= 30 && bmi <= 34.9) {
    result = 'Obese';
  } else if (bmi >= 35) {
    result = 'Extremely obese';
  }

  // Show BMI and comment
  document.querySelector("#result").innerHTML = bmi.toFixed(2);
  resultArea.style.display = "block";
  resultArea.innerHTML = `You are <span id="comment">${result}</span>`;

  console.log("BMI Result: ", bmi.toFixed(2)); // Debugging log
  console.log("Comment: ", result); // Debugging log
}

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
