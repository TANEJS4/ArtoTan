// redirect to registration page on login button click in footer
const login = document.querySelector("#login");
login.addEventListener('click', onLoginClick);
function onLoginClick(e) {
    e.preventDefault();
    location.href = './registration.php';
}

// Registration JS - Form Validation:
// grabbing DOM elements
const regForm = document.querySelector('#regForm');
const regFormError = document.querySelector('.regFormError');
const regFormUsername = document.querySelector('#regFormUsername');
const regFormEmail = document.querySelector('#regFormEmail');
const regFormPass = document.querySelector('#regFormPass');
const regFormConfirmPass = document.querySelector('#regFormConfirmPass');
const regFormDOB = document.querySelector('#regFormDOB');

// listening for a submit event on the form
regForm.addEventListener('submit', onRegFormSubmit);

function onRegFormSubmit(e) {
    // clear default properties
    e.preventDefault();
    // check if any fields are empty
    if(regFormUsername.value === '' ||
        regFormEmail.value === '' ||
        regFormPass.value === '' ||
        regFormConfirmPass.value === '' ||
        !regFormDOB.value) {
            regFormError.classList.add('error');
            regFormError.innerHTML = 'Please enter all fields'; // error message
            setTimeout(() => regFormError.remove(), 3000); // message disappears in 3 seconds
    } else {
        // clear fields
        regFormUsername.value = '';
        regFormEmail.value = '';
        regFormPass.value = '';
        regFormConfirmPass.value = '';
        regFormDOB.value = '';
    }
}