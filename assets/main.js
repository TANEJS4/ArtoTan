// grabbing DOM elements
const regForm = document.querySelector('#regForm');
const regFOrmErrorMsg = document.querySelector('.regFOrmErrorMsg');
const regFormUserName = document.querySelector('#regFormUserName');
const regFormEmail = document.querySelector('#regFormEmail');
const regFormPass = document.querySelector('#regFormPass');
const regFormDOB = document.querySelector('#regFormDOB');

// listening for a submit event on the form
regForm.addEventListener('submit', onSubmit);

function onSubmit(e) {
    e.preventDefault();

    if(regFormUserName.value === '' || regFormEmail.value === '' || regFormPass.value === '' || !regFormDOB.value) {
        regFOrmErrorMsg.classList.add('error');
        regFOrmErrorMsg.innerHTML = 'Please enter all fields';
        setTimeout(() => regFOrmErrorMsg.remove(), 3000); // message disappears in 3 seconds
    } else {
        // clear fields
        regFormUserName.value = '';
        regFormEmail.value = '';
        regFormPass.value = '';
        regFormDOB.value = '';
    }
}