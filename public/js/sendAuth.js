
let alert = document.querySelector('#alert');

let sendReg = document.querySelector('.form__button');

sendReg.addEventListener('click', function () {
    let loginField = document.querySelector('#login').value,
        passwordField = document.querySelector('#password').value;

    $.ajax({
        url: '/user/signIn',
        type: 'POST',
        cache: false,
        dataType: 'html',
        data: {
            'login': loginField,
            'password': passwordField
        },
        success: function (answer) {
            alert.innerHTML = answer;
            if (answer === 'OK') window.location.href = 'http://micro/user/dashboard';
        }
    });
});
