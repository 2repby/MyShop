function get_props() {
// 1. Создаём новый XMLHttpRequest-объект
    let xhr = new XMLHttpRequest();
    var select = document.getElementById("select_cat");
    var id = select.options[select.selectedIndex].value;

// 2. Настраиваем его: GET-запрос по URL /article/.../load
    xhr.open('GET', '/itemprops.php?id='+id);

// 3. Отсылаем запрос
    xhr.send();

// 4. Этот код сработает после того, как мы получим ответ сервера
    xhr.onload = function () {
        if (xhr.status != 200) { // анализируем HTTP-статус ответа, если статус не 200, то произошла ошибка
            alert(`Ошибка ${xhr.status}: ${xhr.statusText}`); // Например, 404: Not Found
        } else { // если всё прошло гладко, выводим результат
            // alert(`Готово, получили ${xhr.response} байт`); // response -- это ответ сервера
            var select_props = document.getElementById("select_props");
            console.log(select_props);
            select_props.innerHTML = "";
            options = xhr.response.split(', ');
            /* Insert the new ones from the array above */
            for (var key in options)
            {
                var opt = document.createElement('option');
                opt.text = options[key];
                opt.value = key;
                select_props.add(opt, null);
            }
        }
    };

    // xhr.onprogress = function (event) {
    //     if (event.lengthComputable) {
    //         alert(`Получено ${event.loaded} из ${event.total} байт`);
    //     } else {
    //         alert(`Получено ${event.loaded} байт`); // если в ответе нет заголовка Content-Length
    //     }
    //
    // };

    xhr.onerror = function () {
        alert("Запрос не удался");
    };
}