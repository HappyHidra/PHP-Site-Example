$(document).ready(function () {

    $.ajax({
        url: "getUserData.php", //url страницы 
        type: "POST", //метод отправки
        dataType: "html", //формат данных
        success: function (response) {
            // const body = document.querySelector('body')
            // const persnumber = document.querySelector('#persnumber')
            // const perscolor = document.querySelector('#perscolor')
            const userFullName = document.querySelector('#welcometext')
            userData = JSON.parse(response);
            // body.style.setProperty('--main-bg-color', userData.user_color)
            userFullName.append(userData.full_name);
            // persnumber.append(userData.user_value);
            // perscolor.style.setProperty('background-color', userData.user_color)
            console.log(userData);
            // console.log(userData.user_color);
        }
    });

    $.ajax({
        url: "getUserHero.php", //url страницы 
        type: "POST", //метод отправки
       // dataType: "html", //формат данных
        success: function (response) {
            const userHeroPortrait = document.querySelector('#hero_portrait')
            const userStr = document.querySelector('#userStr')
            const userAgi = document.querySelector('#userAgi')
            const userInt = document.querySelector('#userInt')
            const heroClass = document.querySelector('#heroClass')

             userDataHero = JSON.parse(response);

            switch (userDataHero.hero_portrait) {
                case "ork":
                        heroClass.append("Орк");
                        // userHeroPortrait.style.setProperty('background-image', '/game1/images/heroes/1.png');
                        $(userHeroPortrait).attr('src', 'images/heroes/1.png');
                        break;

                case 'elf':
                        heroClass.append("Эльф");
                        $(userHeroPortrait).attr('src', 'images/heroes/5.png');
                        break;
                        
                case 'gnome':
                        heroClass.append("Гном");
                        $(userHeroPortrait).attr('src', 'images/heroes/2.png');
                        break;
            }

            userStr.append(userDataHero.hero_str); 
            userAgi.append(userDataHero.hero_agility);
            userInt.append(userDataHero.hero_int);
            console.log(userDataHero);
            console.log(userDataHero.hero_portrait);
        }
    });

    // $("#btnSend").click(
    //     function (event) {
    //         event.preventDefault();
    //         btnSendFunc('personalize.php', "numberForm", 'result_form2');
    //         return false;
    //     }
    // );

    $("#btnCreateHero").click(
        function (event) {
            event.preventDefault();
            btnCreateHeroFunc('createHero.php');
            return false;
        }
    );

    function btnCreateHeroFunc(url) {
        document.location.href = url;
    };

//     function btnSendFunc(url, numberForm, result_form2) {
        // const body = document.querySelector('body')
        // const inputs = document.querySelector('#usercolor')
        // body.style.setProperty('--main-bg-color', inputs.value)
        // perscolor.style.setProperty('background-color', inputs.value)
        // $("#persnumber").text("Ваше любимое число: \n" + usernumber.value);
//         $.ajax({
//             url: url, //url страницы personalize.php
//             type: "POST", //метод отправки
//             dataType: "html", //формат данных

//             // Собираем введенные данные формы
//             data: $("#" + numberForm).serialize(),  // Данные, которые будут отправлены на сервер
//             success: function (response, sost) {

//                 result = JSON.parse(response);
//                 document.getElementById(result_form2).innerHTML = "Данные, присланные сервером:  " + result + "<br>Данные отправлены? " + sost;
//             },
//             error: function (response) { // Данные не отправлены
//                 document.getElementById(result_form2).innerHTML = ("Ошибка. Данные не отправленны." + response);
//             }
//         });
//     }
 });