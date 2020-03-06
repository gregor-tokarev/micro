let alert = $('#alert');

$('#createUrl').click(() => {
    let url = $('#url').value,
        shortUrl = $('#shortUrl').value;
    $.ajax({
        url: '/url/addUrl',
        type: 'POST',
        cache: false,
        dataType: 'html',
        data: {
            url: url,
            shortUrl: shortUrl
        },
        success: function (answer) {
            alert.innerHTML = answer;
        }
    });

});