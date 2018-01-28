var attempt = 3; // Variable to count number of attempts.
// Below function Executes on click of login button.
function validate(){
var username = document.getElementById("username").value;
var password = document.getElementById("password").value;
if ( username == 'Stalin' && password == 'gulag'){
alert ("Login successfully");
<<<<<<< HEAD
window.location = "adminPages/homeAdmin.php"
=======
window.location = "adminPages/homeAdmin.html"
>>>>>>> a09b0009d414f7ffcdec6d0754e3c1e90f8990a0
} 
else if (username == 'Stalin' && password == !'gulag') {
            alert("The password that you've entered is incorrect.");
}
else {
            alert("Wrong username and password.");
        }
}