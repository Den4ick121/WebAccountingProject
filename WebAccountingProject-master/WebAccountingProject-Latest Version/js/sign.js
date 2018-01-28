var attempt = 3; // Variable to count number of attempts.
// Below function Executes on click of login button.
function validate(){
var username = document.getElementById("username").value;
var password = document.getElementById("password").value;
if ( username == 'Stalin' && password == 'gulag'){
alert ("Login successfully");
window.location = "adminPages/homeAdmin.html"
} 
else if (username == 'Stalin' && password == !'gulag') {
            alert("The password that you've entered is incorrect.");
}
else {
            alert("Wrong username and password.");
        }
}