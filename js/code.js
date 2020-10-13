$(document).ready(function () {
    // Получить случайное число от 0 до size-1
    const getRandomNumber = (size) => Math.floor(Math.random() * size);
    // Вычислить расстояние от клика (event) до клада (target)
    const getDistance = (event, target) => {
        const diffX = event.offsetX - target.x;
        const diffY = event.offsetY - target.y;
        return Math.sqrt((diffX * diffX) + (diffY * diffY));
    };
    // Получить для расстояния строку подсказки
    const getDistanceHint = (event, distance) => {
        let placeX = event.offsetX;
        let placeY = event.offsetY;

        if (distance < 10) {
            $('<div>', {
                css: {
                    text: 'X',
                    backgroundColor: 'rgba(255, 6, 6, 0.671)',
                    position: 'absolute',
                    width: 10,
                    height: 10,
                },
                offset: {
                    top: placeY,
                    left: placeX,
                }
            }).appendTo('#maps');
            return "Обожжешься!";
        }

        if (distance < 20) {
            $('<div>', {
                css: {
                    backgroundColor: 'rgba(238, 59, 14, 0.664)',
                    position: 'absolute',
                    width: 8,
                    height: 8,
                },
                offset: {
                    top: placeY,
                    left: placeX,
                }
            }).appendTo('#maps');
            return "Очень горячо";
        }

        if (distance < 40) {
            $('<div>', {
                css: {
                    backgroundColor: 'rgba(255, 52, 1, 0.966)',
                    position: 'absolute',
                    width: 8,
                    height: 8,
                },
                offset: {
                    top: placeY,
                    left: placeX,
                }
            }).appendTo('#maps');
            return "Горячо";
        }

        if (distance < 80) {
            $('<div>', {
                css: {
                    backgroundColor: 'rgba(255, 175, 1, 0.664)',
                    position: 'absolute',
                    width: 8,
                    height: 8,
                },
                offset: {
                    top: placeY,
                    left: placeX,
                }
            }).appendTo('#maps');
            return "Тепло";
        }

        if (distance < 160) {
            $('<div>', {
                css: {
                    backgroundColor: 'rgb(1, 153, 255)',
                    position: 'absolute',
                    width: 8,
                    height: 8,
                },
                offset: {
                    top: placeY,
                    left: placeX,
                }
            }).appendTo('#maps');
            return "Холодно";
        }

        if (distance < 320) {
            $('<div>', {
                css: {
                    backgroundColor: 'rgba(1, 120, 255, 0.966)',
                    position: 'absolute',
                    width: 8,
                    height: 8,
                },
                offset: {
                    top: placeY,
                    left: placeX,
                }
            }).appendTo('#maps');
            return "Очень холодно";
        }

        $('<div>', {
            css: {
                backgroundColor: 'blue',
                position: 'absolute',
                width: 8,
                height: 8,
            },
            offset: {
                top: placeY,
                left: placeX,
            }
        }).appendTo('#maps');
        return "Замерзнешь!";
    };
    // Создаем переменные
    const width = 600;
    const height = 500;
    let clicks = 25;
    // Случайная позиция клада
    let target = {
        x: getRandomNumber(width),
        y: getRandomNumber(height)
    };
    // Добавляем элементу img обработчик клика
    $("#map").click(function (event) {
        if (clicks === 0) {
            $('#map').attr("src", "images/death.jpg");
            $('#distance').text('Вы проиграли!');
            $('#again').text('Попробуем ещё раз?');
            return;
        }
        clicks -= 1;
        // Получаем расстояние от места клика до клада
        let distance = getDistance(event, target);
        // Преобразуем расстояние в подсказку
        let distanceHint = getDistanceHint(event, distance);
        // Записываем в элемент #distance новую подсказку
        $('#clicks').text("Осталось кликов: " + clicks);
        $("#distance").text(distanceHint);
        let placeX = event.offsetX;
        let placeY = event.offsetY;

        if (distance < 8) {
            clicks = 25 - clicks;
            $('<div>', {
                css: {
                    text: 'X',
                    color: 'black',
                    backgroundColor: 'red',
                    position: 'absolute',
                    width: 10,
                    height: 10,
                },
                offset: {
                    top: placeY,
                    left: placeX,
                }
            }).appendTo('#maps');

            $('#distance').text("Клад найден! Сделано кликов: " + clicks);
            $('#map').attr("src", "images/treasure.jpg");
            $('#again').text('Попробуем ещё раз?');
        }
    });

    $("#again").click(function () {
        clicks = 25;
        $('#clicks').text("Осталось кликов: " + clicks);
        $('#maps').children().remove();
        $('#map').attr("src", "images/World_map.jpg");
        target = {
            x: getRandomNumber(width),
            y: getRandomNumber(height)
        };
        console.log(target);
    });

    $("#btnBack").click(
        function (event) {
            event.preventDefault();
            btnBackFunc('intropage.php');
            return false;
        }
    );

    function btnBackFunc(url) {
        document.location.href = url;
    };

});