let map, infoWindow, service;


function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 43.25811875074601, lng: -79.93293898594843 },
    zoom: 15,
    styles: styles["hide"],
  });

  // current location feature
  infoWindow = new google.maps.InfoWindow();

  const locationButton = document.createElement("button");

  locationButton.textContent = "See nearby you";
  map.controls[google.maps.ControlPosition.TOP_CENTER].push(locationButton);
  locationButton.addEventListener("click", () => {
    // Try HTML5 geolocation.
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(
        (position) => {
          const pos = {
            lat: position.coords.latitude,
            lng: position.coords.longitude,
          };

          infoWindow.setPosition(pos);
          infoWindow.setContent("Location found.");
          infoWindow.open(map);
          map.setCenter(pos);
          map.setZoom(13);
        },
        () => {
          handleLocationError(true, infoWindow, map.getCenter());
        }
      );
    } else {
      // if browser doesn't support Geolocation or user doesnot allow 
      handleLocationError(false, infoWindow, map.getCenter());
    }
  });
}
// to be added
// using JSON to print reviews
function placesAPI() {
  initMap();

  const usrQuery = document.getElementById("UsrQuery").innerHTML;
  const request = {
    query :usrQuery,
    field :["name", "geometry", "review"],

  };
  service = new google.maps.places.PlacesServices(map);
  service.findPlaceFromQuery(request, function (results, status) {
    if (status === google.maps.places.PlacesServicesStatus.OK) {
      for (var j = 0; j < results.length; j++){
        createMarker(results[i]);
      }
      map.setCenter(result[0].geometry.location);
    }
  })
}
function markAll() {
  initMap();
  const marker1 = new google.maps.Marker({
    position: { lat: 43.26225288818, lng: -79.90583551229605 },
    map: map,
  });
  const marker2 = new google.maps.Marker({
    position: {lat: 43.253503127472044, lng: -79.92185207027772},
    map: map,
  });
}
function poiMark(pos, rowID) {
  infoWindow = new google.maps.InfoWindow();
  const locationName = document.getElementById(rowID).innerHTML;
  // const pos = { lat: 43.253531005298015, lng: -79.92186482908565 };

  infoWindow.setPosition(pos);
  infoWindow.setContent(locationName);
  infoWindow.open(map);
  map.setCenter(pos);
  map.setZoom(17);
  const marker1 = new google.maps.Marker({
    position: pos,
    map: map,
  });
}
//hide other POIs to make it less clutered
const styles = {
  hide: [
    {
      featureType: "poi.business",
      stylers: [{ visibility: "off" }],
    },
  ],
};

function moreDetail(labelID) {
  const labelName = document.getElementById(labelID).innerHTML;
  window.open("/assets/individual_sample.html", "_self");
  
}
// helper from google - did not code this! 
function handleLocationError(browserHasGeolocation, infoWindow, pos) {
  // infoWindow.setPosition(pos);
  infoWindow.setContent(
    browserHasGeolocation
      ? "Error: The Geolocation service failed."
      : "Error: Your browser doesn't support geolocation."
  );
  infoWindow.open(map);
}


function createMarker(place) {
  if (!place.geometry || !place.geometry.location) return;

  const marker = new google.maps.Marker({
    map,
    position: place.geometry.location,
  });

  google.maps.event.addListener(marker, "click", () => {
    infowindow.setContent(place.name || "");
    infowindow.open(map);
  });
}