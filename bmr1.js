var age = document.getElementById("age");
var height = document.getElementById("height");
var weight = document.getElementById("weight");
var male = document.getElementById("m");
var female = document.getElementById("f");
var form = document.getElementById("form");
let resultArea = document.querySelector(".comment");

modalContent = document.querySelector(".modal-content");
modalText = document.querySelector("#modalText");
var modal = document.getElementById("myModal");
var span = document.getElementsByClassName("close")[0];


function calculate(){
 
  if(age.value=='' || height.value=='' || weight.value=='' || (male.checked==false && female.checked==false)){
    modal.style.display = "block";
    modalText.innerHTML = `All fields are required!`;

  }else{
    countBmr();
  }

}
  function countBmr(){
      var p = [age.value, height.value, weight.value];
        if(male.checked){
          p.push("male");
          var bmr= (10*Number(p[2])) + (6.25*Number(p[1])) - (5*Number(p[0])) + 5;
        }
        else if(female.checked){
          p.push("female");
          var bmr= (10*Number(p[2])) + (6.25*Number(p[1])) - (5*Number(p[0]))-161;
        }
    

        //var bmi = Number(p[2])/(Number(p[1])/100*Number(p[1])/100);
      resultArea.style.display = "block";
      document.querySelector(".comment").innerHTML = `<span id="comment">CALORIE/Day</span>`;
      document.querySelector("#result").innerHTML = bmr.toFixed(2);

  }

// When the user clicks on <span> (x), close the modal

span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
