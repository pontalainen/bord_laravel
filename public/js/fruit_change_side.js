import { cardIdNfc } from "./nfc.js";
const iframe1 = document.getElementById("leftIframe");
const iframe2 = document.getElementById("rightIframe");
const scanModeBtn = document.querySelector(".scanModeBtn");
const buttonLeft = document.querySelector(".changeSideBtnLeft");
const buttonRight = document.querySelector(".changeSideBtnRight");

let sideToLoadOn = "left";
let touch = true;

window.onload = (event) => {
    // iframe1.src = "../fruit_pages/first-side.html";
    iframe2.src = "../fruit_pages/first-side.html";
    iframe1.src = "../../fruit_pages/pork.html";
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
        scanModeBtn.innerHTML = "Touch: Off";
        touch = false;
        console.log(touch);
    } else if (touch === false) {
        scanModeBtn.innerHTML = "Touch: On";
        touch = true;
    }
});

function loadPage(a) {
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
        iframe1.src = a;
    } else if (sideToLoadOn === "right") {
        iframe2.src = a;
    }
}

async function getNfcId(){


console.log(window.paths);
let cardId = await cardIdNfc("none");
alert(cardId);

switch (cardId){
    case "1":
      window.path.push("{{ $fruit->path }}");
      break;
    case "2":
      window.path.push("{{ $fruit->path }}");
      break;
    case "3":
      window.path.push("{{ $fruit->path }}");
      break;
    case "4":
      window.path.push("{{ $fruit->path }}");
      break;
    case "5":
      window.path.push("{{ $fruit->path }}");
      break;
    case "6":
      window.path.push("{{ $fruit->path }}");
      break;
    case "7":
      window.path.push("{{ $fruit->path }}");
      break;
    case "8":
      console.log("{{ $fruit->path }}");
      break;
    case "9":
      console.log("{{ $fruit->path }}");
      break;
    case "10":
      console.log("{{ $fruit->path }}");
      break;
    case "11":
      console.log("{{ $fruit->path }}");
      break;
    case "12":
      console.log("{{ $fruit->path }}");
      break;
    case "13":
      console.log("{{ $fruit->path }}");
      break;
    case "14":
      console.log("{{ $fruit->path }}");
      break;
    case "15":
      console.log("{{ $fruit->path }}");
      break;
    case "16":
      console.log("{{ $fruit->path }}");
      break;
    case "17":
      console.log("{{ $fruit->path }}");
      break;
    case "18":
      console.log("{{ $fruit->path }}");
      break;
    case "19":
      console.log("{{ $fruit->path }}");
      break;
    case "20":
      console.log("{{ $fruit->path }}");
      break;
    case "21":
      console.log("{{ $fruit->path }}");
      break;
    case "22":
      console.log("{{ $fruit->path }}");
      break;
    case "23":
      console.log("{{ $fruit->path }}");
      break;
    case "24":
      console.log("{{ $fruit->path }}");
      break;
    case "25":
      console.log("{{ $fruit->path }}");
      break;
    case "26":
      console.log("{{ $fruit->path }}");
      break;
    case "27":
      console.log("{{ $fruit->path }}");
      break;
    case "28":
      console.log("{{ $fruit->path }}");
      break;
    case "29":
      console.log("{{ $fruit->path }}");
      break;
    case "30":
      console.log("{{ $fruit->path }}");
      break;
    case "31":
      console.log("{{ $fruit->path }}");
      break;
    case "32":
      console.log("{{ $fruit->path }}");
      break;
    case "33":
      console.log("{{ $fruit->path }}");
      break;
    case "34":
      console.log("{{ $fruit->path }}");
      break;
    case "35":
      console.log("{{ $fruit->path }}");
      break;
    case "36":
      console.log("{{ $fruit->path }}");
      break;
    case "37":
      console.log("{{ $fruit->path }}");
      break;
    case "38":
      console.log("{{ $fruit->path }}");
      break;
    case "39":
      console.log("{{ $fruit->path }}");
      break;
    case "40":
      console.log("{{ $fruit->path }}");
      break;
    case "41":
      console.log("{{ $fruit->path }}");
      break;
    case "42":
      console.log("{{ $fruit->path }}");
      break;

  }
}
getNfcId();
/*window.addEventListener("keydown", function (a) {
    switch (a.key) {
        case "1":
            loadPage("../../fruit_pages/pork.html");

            break;
        case "2":
            loadPage("../../fruit_pages/sugar.html");

            break;
        case "3":
            loadPage("../../fruit_pages/tomato.html");
            break;
        case "4":
            loadPage("../../fruit_pages/apple.html");
            break;
        case "5":
            loadPage("../../fruit_pages/banana.html");
            break;
        case "6":
            loadPage("../../fruit_pages/wheat.html");
            break;
        case "7":
            loadPage("../../fruit_pages/strawberry.html");
            break;
        case "8":
            loadPage("../../fruit_pages/rice.html");
            break;
        case "9":
            loadPage("../../fruit_pages/potato.html");
            break;
        case "0":
            loadPage("../../fruit_pages/first-side.html");
            break;
    }
});*/
