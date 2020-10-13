$(document).ready(function () {

    const ork = document.querySelector("#ork");
    const gnome = document.querySelector("#gnome");
    const elf = document.querySelector("#elf");

    const attr = document.querySelector("#attr");
    const strenghtPlus = document.querySelector("#strenghtPlus");
    const strenghtMinus = document.querySelector("#strenghtMinus");
    const strenghtResultHTML = document.querySelector("#strenghtResult");

    const agilityPlus = document.querySelector("#agilityPlus");
    const agilityMinus = document.querySelector("#agilityMinus");
    const agilityResultHTML = document.querySelector("#agilityResult");

    const intPlus = document.querySelector("#intPlus");
    const intMinus = document.querySelector("#intMinus");
    const intResultHTML = document.querySelector("#intResult");

    const pointsLeftHMTL = document.querySelector("#pointsLeft");
    pointsLeftHMTL.innerHTML = 10;
    let strenghtResult = 0;
    let agilityResult = 0;
    let intResult = 0;
    let chosenHero = '';
    let pointsLeft = 10;

    strenghtMinus.onclick = function(){
        if(strenghtResult>0 & pointsLeft < 10){
            strenghtResult--;
            pointsLeft ++;
            pointsLeftHMTL.innerHTML = pointsLeft;
            strenghtResultHTML.innerHTML = strenghtResult; 
        }
        else return;
    }

    strenghtPlus.onclick = function(){
        if(strenghtResult<10 & pointsLeft > 0)
        {
            strenghtResult++;
            pointsLeft --;
            pointsLeftHMTL.innerHTML = pointsLeft;
            strenghtResultHTML.innerHTML = strenghtResult
        }
        else return;
    }

    agilityMinus.onclick = function(){
        if(agilityResult>0 & pointsLeft < 10){
            agilityResult--;
            pointsLeft ++;
            pointsLeftHMTL.innerHTML = pointsLeft;
            agilityResultHTML.innerHTML = agilityResult;   
        }
        else return;
    }

    agilityPlus.onclick = function(){
        if(agilityResult<10 & pointsLeft > 0)
        {
            agilityResult++;
            pointsLeft --;
            pointsLeftHMTL.innerHTML = pointsLeft;
            agilityResultHTML.innerHTML = agilityResult;
        }
        else return;
    }

    intMinus.onclick = function(){
        if(intResult>0 & pointsLeft < 10){
            intResult--;
            pointsLeft ++;
            pointsLeftHMTL.innerHTML = pointsLeft;
            intResultHTML.innerHTML = intResult;   
        }
        else return;
    }

    intPlus.onclick = function(){
        if(intResult<10 & pointsLeft > 0)
        {
            intResult++;
            pointsLeft --;
            pointsLeftHMTL.innerHTML = pointsLeft;
            intResultHTML.innerHTML = intResult;
        }
        else return;
    }



    ork.onclick = function () {
        $("#elf").hide('slow');
        $("#gnome").hide('slow');
        $("#strenght").show('slow');
        attr.style.setProperty('visibility', "visible");
        btnCancel.style.setProperty('visibility', "visible");
        chosenHero = 'ork';
    }

    gnome.onclick = function () {
        $("#elf").hide('slow');
        $("#ork").hide('slow');
        $("#strenght").show('slow');
        attr.style.setProperty('visibility', "visible");
        btnCancel.style.setProperty('visibility', "visible");
        chosenHero = 'gnome';
    }

    elf.onclick = function () {
        $("#ork").hide('slow');
        $("#gnome").hide('slow');
        $("#strenght").show('slow');
        attr.style.setProperty('visibility', "visible");
        btnCancel.style.setProperty('visibility', "visible");
        chosenHero = 'elf';
    }

    // $.ajax({
    //     url: "getUserData.php", //url страницы 
    //     type: "POST", //метод отправки
    //     dataType: "html", //формат данных
    //     success: function (response) {
    //         const body = document.querySelector('body')
    //         userData = JSON.parse(response);
    //         body.style.setProperty('--main-bg-color', userData.user_color)
    //     }
    // });

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

$("#btnCancel").click(
    function (event) {
        event.preventDefault();
        btnCancelFunc();
        return false;
    }
);

function btnCancelFunc() {
    $("#ork").show('slow');
    $("#elf").show('slow');
    $("#gnome").show('slow');
    attr.style.setProperty('visibility', "hidden");
    btnCancel.style.setProperty('visibility', "hidden");
    pointsLeftHMTL.innerHTML = 10;
    strenghtResult = 0;
    agilityResult = 0;
    intResult = 0;
    chosenHero = '';
    pointsLeft = 10;
    agilityResultHTML.innerHTML = agilityResult;
    strenghtResultHTML.innerHTML = strenghtResult;
    intResultHTML.innerHTML = intResult;
};


$("#btnSaveHero").click(
    function (event) {
        event.preventDefault();
        btnSaveHeroFunc();
        return false;
    })

function btnSaveHeroFunc() {
    $.ajax({
        url: "createHeroPHP.php",
        type: "POST", 
        data: {chosenHero, strenghtResult, agilityResult, intResult},
        success: function (response) {
            document.location.href = 'intropage.php';
            console.log(response);
        }

    });
}});