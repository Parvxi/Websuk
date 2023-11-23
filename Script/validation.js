//function validate will validate each input data
function validate() {
    //Taking the values from the form
    var Fname = document.getElementById("Fname");
    var Lname = document.getElementById("Lname");
    var phone = document.getElementById("phone");
    var email=document.getElementById("email");

  
    //regular expressions patterns of the first+last name - phone number -email
    var regName = /^(?=.{3,15}$)[a-zA-Z]+$/; //check that entered name is only letters, and range between 2,15 letter
    var regEmail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z]+)*$/;
    var regPhone = /^(05)([0-9]{8})$/;
    var regID = /^(1)([0-9]{5})$/;
    //First+last name validity check: must contain only letters 
    if (Fname.value == "" || Lname.value == "" ) {
              alert("Name is required");
      } else {
        if (!Fname.value.match(regName) || !Lname.value.match(regName)) {
              alert("Name should contain letters only!");
      } else {
        //email validity check: not null and correct format
        if (email.value == "" || !email.value.match(regEmail)) {
              alert("Email is required, please check if the email is valid (CORROECT FORMAT: name@domain.com)");
      } else {
        //phone number validity check: phone number not null, length must be 12, and in correct format
        if (phone.value == "") {
              alert("Phone number is required");
      } else {
        if (phone.value.toString().length < 10 || !phone.value.match(regPhone)) {
              alert("Please enter the correct phone number");
      } else {
      
                //print thank you message with all form inputs
                window.alert("Thank You for contact us "+Fname.value + " " +Lname.value);
            }    
                   }
                }
              }
            }
          }
        
       //End function
          
    
        
    //close function validate
  //function start will add event listener to activate submit button and clear button
  function start() {   
    var submitButton = document.getElementById("submitButton");
    submitButton.addEventListener("click", validate, false);
  }

  window.addEventListener("load", start, false);
  