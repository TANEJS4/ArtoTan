// redirect to registration page on login button click in footer
const login = document.querySelector("#login");
login.addEventListener('click', onLoginClick);
function onLoginClick(e) {
    e.preventDefault();
    location.href = './registration.html';
}

// get current latitude and longitude using Google Maps API
const getCurrentLatLong = document.querySelector('#getCurrentLatLong');
const addLocFormLocLat = document.querySelector('#addLocFormLocLat');
const addLocFormLocLong = document.querySelector('#addLocFormLocLong');

// listening for a button click
getCurrentLatLong.addEventListener('click', onGetCurrentLatLongClick);

function onGetCurrentLatLongClick(e) {
    e.preventDefault();
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(
            (position) => {
                const pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude,
                };
                addLocFormLocLat.value = pos.lat;
                addLocFormLocLong.value = pos.lng;
            });
    }
}