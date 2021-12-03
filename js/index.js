// redirect to registration page on login button click in footer
const login = document.querySelector("#login");
login.addEventListener('click', onLoginClick);
function onLoginClick(e) {
    e.preventDefault();
    location.href = './html/registration.php';
}

function getUsrLocation() {

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError);
    } else {
        alert("geolocation not supported");
    }
    // document.getElementById("dropDownOptions").submit();
}
function showPosition(position) {
    var latt = document.getElementById("locationLat");
    var longg = document.getElementById("locationLong");
    latt.value = position.coords.latitude;
    longg.value = position.coords.longitude;
    document.getElementById("dropDownOptions").submit();
}
function showError(error) {
    if (error.PERMISSION_DENIED) {
        alert("geolocation not supported");
    }
}
function setRating() {
    var ratin = document.getElementById("ratingBool");
    ratin.value = "true";
    document.getElementById("dropDownOptions").submit();
}


