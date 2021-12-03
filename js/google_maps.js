let map, infoWindow, service;
// initmap initiazes google map to set location
function initMap() {
    map = new google.maps.Map(document.getElementById("map"), {
        center: { lat: 43.25811875074601, lng: -79.93293898594843 },
        zoom: 15,
        // to remove all points of interests "see styles below for more details"
        styles: styles["hide"],
    });

    // current location feature
    infoWindow = new google.maps.InfoWindow();

    // infoWindow is basically the interactable elements in google maps
    //  other than the maps itself like zoomin button
    const locationButton = document.createElement("button");

    locationButton.textContent = "See nearby you";
    // from google maps docs, TOP_CENTER is the absolute position on maps DIV 
    // map.controls allows user interaction with maps.
    // push basically add the parameter to the array of map controls
    map.controls[google.maps.ControlPosition.TOP_CENTER].push(locationButton);
    locationButton.addEventListener("click", () => {
        // Try HTML5 geolocation.
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition((position) => {
                const pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude,
                };
                // setPosition marks the pos(coordinates) on infomap 
                infoWindow.setPosition(pos);
                infoWindow.setContent("Location found.");
                infoWindow.open(map);
                // centers the map lol
                map.setCenter(pos);
                map.setZoom(13);
            }, () => {
                // error handler something i faced with EC2, had to add it else the 
                // maps get error on backend without providing user info
                    handleLocationError(true, infoWindow, map.getCenter());
            });
        } else {
            // if browser doesn't support Geolocation or user doesnot allow
            handleLocationError(false, infoWindow, map.getCenter());
        }
    });
}
// marks the two location on map
function markAll() {
    // initialize map
    initMap();
    // uses google maps marker api to set marker on maps
    const marker1 = new google.maps.Marker({
        // coordited
        position: { lat: 43.26225288818, lng: -79.90583551229605 },
        // what map to show on (you can have more than one map element)
        map: map,
    });

    const marker2 = new google.maps.Marker({
        position: {lat: 43.253503127472044, lng: -79.92185207027772},
        map: map,
    });
}
// to pan over the marker location
// input: *  pos = coordinates on html page
//      * rowID = to identify that row (Cafe)
function poiMark(pos, rowID) {
    infoWindow = new google.maps.InfoWindow();
    // to get name of the cafe 
    const locationName = document.getElementById(rowID).innerHTML;
    // const pos = { lat: 43.253531005298015, lng: -79.92186482908565 };
    // explained above
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

// links to button functionality on result_sample
// basically for future implementaion to identify what element was selected so that next page can 
// dynamically adjust itself
function moreDetail(labelID) {
    const labelName = document.getElementById(labelID).innerHTML;
    // _self option opens the page in the current tab or window instead of creating new window or tab

    window.open("/html/individual_sample.php", "_self");
}

//! helpers 

// to print error handling data
// help from google docs 
function handleLocationError(browserHasGeolocation, infoWindow, pos) {
    // infoWindow.setPosition(pos);
    infoWindow.setContent(
        browserHasGeolocation
            ? "Error: The Geolocation service failed."
            : "Error: Your browser doesn't support geolocation."
    );
    infoWindow.open(map);
}


// hide other POIs to make it less cluttered
// google maps have document on what can be presented on map 
// they list them down with many options like visibility on or off, color of marker
const styles = {
    hide: [
    {
      // featureType explains selects the POI
      // https://developers.google.com/maps/documentation/javascript/poi-behavior-customization
        featureType: "poi.business",
        stylers: [{ visibility: "off" }],
    },
],
};
