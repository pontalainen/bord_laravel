import { cardIdNfc } from "./nfc.js";
const iframe1 = document.getElementById("leftIframe");
const iframe2 = document.getElementById("rightIframe");
const scanModeBtn = document.querySelector(".scanModeBtn");
const buttonLeft = document.querySelector(".changeSideBtnLeft");
const buttonRight = document.querySelector(".changeSideBtnRight");

let sideToLoadOn = "left";
let touch = true;

window.onload = (event) => {
    iframe1.src = "../fruit_pages/first-side.html";
    iframe2.src = "../fruit_pages/first-side.html";
    changeUrl("side", "left");
};

function changeUrl(name, side) {
    const searchParams = new URLSearchParams(window.location.search);
    searchParams.set(name, side);
    const newRelativePathQuery =
        window.location.pathname + "?" + searchParams.toString();
    history.pushState(null, "", newRelativePathQuery);
}

scanModeBtn.addEventListener("click", function () {
    if (touch) {
        scanModeBtn.innerHTML = "Touch: Auto";
        touch = false;
        console.log(touch);
    } else if (touch === false) {
        scanModeBtn.innerHTML = "Touch: Manual";
        touch = true;
    }
});

function loadPage(page) {
    if (touch) {
        buttonLeft.addEventListener("click", function () {
            changeUrl("side", "left");
            sideToLoadOn = "left";
            /*sideBtn.innerHTML = "Vänster sidan";*/
        });

        buttonRight.addEventListener("click", function () {
            changeUrl("side", "right");
            sideToLoadOn = "right";
            /*sideBtn.innerHTML = "Höger sidan";*/
        });
    } else {
        if (sideToLoadOn === "left") {
            changeUrl("side", "right");
            sideToLoadOn = "right";
        } else if (sideToLoadOn === "right") {
            changeUrl("side", "left");
            sideToLoadOn = "left";
        }
    }
    if (sideToLoadOn === "left") {
        iframe1.src = page;
    } else if (sideToLoadOn === "right") {
        iframe2.src = page;
    }
}

async function getNfcId(){
    let cardId;
    let oldCardId;
    
    while(true){

        cardId = await cardIdNfc("none");

        if(cardId !== oldCardId)
        {

            if(window.card.findIndex((element) => element === cardId)){
                let indexId = window.card.findIndex((element) => element === cardId);
                loadPage(window.paths[indexId]);
            }
        }

        oldCardId = cardId;
        
    }
}
getNfcId();