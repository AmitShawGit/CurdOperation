let uname = document.getElementById("uname");
let number = document.getElementById("number");
let mail = document.getElementById("mail");
let dob = document.getElementById("dob");
let gender = document.getElementById("gender");
let password = document.getElementById("pass");

let flag = 1;

function validateForm() {
/*name */
if (uname.value == "") {
   document.getElementById("una").innerHTML = "Name must be filled";
   flag = 0;
}
else if  (uname.value.length < 3) {
    document.getElementById("una").innerHTML = "Atleast three letter";
    flag = 0;
 }
else {
    document.getElementById("una").innerHTML = "";
    flag = 1;
}
/*number*/ 
if (number.value == "") {
    document.getElementById("num").innerHTML = "Number must be filled";
    flag = 0;
 }
 else if  (number.value.length < 10) {
     document.getElementById("num").innerHTML = "Invalid Number";
     flag = 0;
  }
 else {
     document.getElementById("num").innerHTML = "";
     flag = 1;
 }

 /*mail*/ 
if (mail.value == "") {
    document.getElementById("gmal").innerHTML = "Mail must be filled";
    flag = 0;
 }
 else {
     document.getElementById("gmal").innerHTML = "";
     flag = 1;
 }

 /*DOB*/ 
if (dob.value == "") {
    document.getElementById("dobs").innerHTML = "Invalid DOB";
    flag = 0;
 }
 else {
     document.getElementById("dobs").innerHTML = "";
     flag = 1;
 }
/*pass */
if (password.value == "") {
    document.getElementById("password").innerHTML = "password must be filled";
    flag = 0;
 }
 else if  (password.value.length < 3) {
     document.getElementById("password").innerHTML = "Atleast three letter";
     flag = 0;
  }
 else {
     document.getElementById("password").innerHTML = "";
     flag = 1;
 }


/*flag */
if (flag) {
return true;
}
else  {
return false;
}
} 