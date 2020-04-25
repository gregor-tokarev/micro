let button = document.querySelector('#sendMail');

button.addEventListener('click', () => {
    let name = document.forms[0].name.value,
        email = document.forms[0].email.value,
        age = document.forms[0].age.value,
        massage = document.forms[0].massage.value;

    $.ajax({
        url: '/contacts/sendLetter',
        type: 'POST',
        cache: false,
        dataType: 'html',
        data: {
            name,
            email,
            age,
            massage
        },
        success: function (answer) {
            console.log(answer)
        }
    })
});