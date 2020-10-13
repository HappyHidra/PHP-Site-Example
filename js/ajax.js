$(document).ready(function () {

    $("#btnRegistration").click(
        function (event) {
            event.preventDefault();
            btnRegistrationFunc('register.php');
            return false;
        }
    );

    $("#btnLogin").click(
        function () {
        btnLoginFunc('loginserver.php', "loginAjaxForm", 'result_form');
        return false;
        }
    );

});

function btnRegistrationFunc(url) {
    document.location.href = url;
}

function btnLoginFunc(url, loginAjaxForm, result_form) {
    $.ajax({
        url: url, //url страницы loginserver.php
        type: "POST", //метод отправки
        dataType: "html", //формат данных
        // Собираем введенные данные формы
        data: $("#" + loginAjaxForm).serialize(),  // Данные, которые будут отправлены на сервер
        success: function (response, sost) {
            //Функция, которая будет вызвана в случае удачного завершения запроса к серверу. 
            //Ей будут переданы три параметра: 
            //Первый - данные, присланные сервером и уже прошедшие предварительную обработку (которая отлична для разных dataType).
            //Второй - строка со статусом выполнения.
            //Третий - содержит объект jqXHR

            result = JSON.parse(response);

            if (result == "ok"){
                document.getElementById(result_form).innerHTML = "Данные, присланные сервером:  " + result + "<br>Данные отправлены? " + sost;
                window.location.href = ("intropage.php");
            }
            else{
                document.getElementById(result_form).innerHTML = "Данные, присланные сервером, отказ:  " + result + "<br>Данные отправлены? " + sost;
            }
        },
          error: function (response) { // Данные не отправлены
          document.getElementById(result_form).innerHTML = ("Ошибка. Данные не отправленны." + response);
          }
    });
}