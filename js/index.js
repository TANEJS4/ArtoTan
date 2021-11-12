// redirect to registration page on login button click in footer
const login = document.querySelector("#login");
login.addEventListener('click', onLoginClick);
function onLoginClick(e) {
    e.preventDefault();
    location.href = './html/registration.html';
}

const searchButton = document.querySelector("#searchButton");
function onSearchButtonClick(e) {
    e.preventDefault();
    location.href = './html/result_sample.html';
}
searchButton.addEventListener('click', onSearchButtonClick);

const form = document.getElementById("searchBox");

// Now, set up a submit event handler for the form
form.addEventListener("submit", function() {
    // Only when the form has been submitted do you want the text value
    const inputTest = document.getElementById('searchQuery').value;
    localStorage.setItem( 'objectToPass', inputTest );
    window.location = "./html/result_sample.html";
});