// var locationLabel = document.getElementById("LocationLabel");
// function getUserLocation() {
// 	if (navigator.geolocation) {
// 		navigator.geolocation.getCurrentPosition(showPosition);

// 	} else {
// 		locationLabel.innerHTML = "geolocation is not supported by this browser";
// 	}
// }

// function showPosition(position) {
// 	locationLabel.innerHTML = "latitude:" + position.coords.latitude + "<br>longitude: " + position.coords.longitude;
// }

// google maps init
// let map;
// function initMap() {
//   map = new google.maps.Map(Document.getElementById("map_canvas"), {
//     center: { lat: -34.397, lng: 150.644 },
//     zoom: 8,
//   });
// }


function initMap() {
  var uluru = { lat: 51.957244, lng: 4.570751 };
  var map = new google.maps.Map(document.getElementById("map"), {
    zoom: 15,
    center: uluru,
  });
  var marker = new google.maps.Marker({
    position: uluru,
    map: map,
  });
}