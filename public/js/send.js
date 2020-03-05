
let alert = document.querySelector('#alert');

let send = document.querySelector('.form__button');

send.addEventListener('click', function () {
let loginField = document.querySelector('#login').value,
    emailField = document.querySelector('#email').value,
    passwordField = document.querySelector('#password').value;

    $.ajax({
        url: '/user/reg',
        type: 'POST',
        cache: false,
        dataType: 'html',
        data: {
            'login': loginField,
            'email': emailField,
            'password': passwordField
        },
        success: function (answer) {
            alert.innerHTML = answer;
            if (answer === 'OK') window.location.href = 'http://micro/user/dashboard';
        }
    });
});
