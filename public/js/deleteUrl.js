deleteButton = document.querySelectorAll('.list-group-item .deleteButton');

deleteButton.forEach(element => {
    element.addEventListener('click', e => {
        el = e.currentTarget;
        console.log(el.parentElement, element.parentElement);
        id = el.parentElement.getAttribute('id');

        $.ajax({
            url: '/url/deleteUrl',
            type: 'POST',
            cache: false,
            dataType: 'html',
            data: {
                'id' : id
            },
            success: function (answer) {
                if (answer === 'OK') el.parentElement.remove();
            }
        })
    })
});