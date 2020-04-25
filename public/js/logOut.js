$('#logOut').click(function () {
    $.ajax({
        url: '/user/logOut',
        type: 'POST',
        cache: false,
        dataType: 'html',
        data: {
            single : '0'
        },
        success: function (answer) {
            if (answer === 'OK') window.location.href = 'http://micro/';
        }
    });
});