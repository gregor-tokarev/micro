let alert = document.querySelector('#alert');

let listGroup = document.querySelector('.list-group');

$('#createUrl').click(function () {
    let url = document.querySelector('#url').value,
        shortUrl = document.querySelector('#shortUrl').value;

    if (url === '' || shortUrl === '') {
        alert.textContent = 'Заполните поля';
        return false;
    }
    $.ajax({
        url: '/url/addUrl',
        type: 'POST',
        cache: false,
        dataType: 'html',
        data: {
            'url': url,
            'shortUrl': shortUrl
        },
        success: function (answer) {
            answer = JSON.parse(answer);
            console.log(answer);
            if (answer.code === 'Сокращение уже существует') {
                alert.textContent = answer.code;
                return false;
            }
            console.log(answer.id);
            listGroup.appendChild(createUrlElement(answer['url'], answer['short_url'], answer['id']));
            alert.textContent = answer.code;

        }
    });

});


function createUrlElement(url, shortUrl, id) {

    const el = document.createElement('div');
    el.classList.add('list-group-item');
    el.setAttribute('id', id);

    const urlEl = document.createElement('div');
    urlEl.insertAdjacentHTML('afterbegin', `<b>Длинная</b>: ${url} <br>
      <b>короткая</b>: http://micro/r/${shortUrl}`);

    const deleteUrl = document.createElement('button');
    deleteUrl.classList.add('btn', 'btn-danger', 'deleteButton');
    deleteUrl.textContent = 'Удалить';

    el.appendChild(urlEl);
    el.appendChild(deleteUrl);

    return el;

}