var attempt = 3; // Variable to count number of attempts.
// Below function Executes on click of login button.
function validate(){
var username = document.getElementById("username").value;
var password = document.getElementById("password").value;
if ( username == 'Admin' && password == '1234'){
alert ("Login successfully");
window.location = "adminPages/homeAdmin.php"
} 
else if (username == 'Admin' && password == !'1234') {
            alert("The password that you've entered is incorrect.");
}
else {
            alert("Wrong username and password.");
        }
}