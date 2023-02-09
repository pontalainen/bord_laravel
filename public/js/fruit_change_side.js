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
        scanModeBtn.innerHTML = "Touch: Off";
        touch = false;
        console.log(touch);
    } else if (touch === false) {
        scanModeBtn.innerHTML = "Touch: On";
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
    
    while(true){
        cardId = await cardIdNfc("none");

        delay(1000).then();

        switch (cardId){
            case window.card[0]:
                loadPage(window.paths[0]);
                break;
            case window.card[1]:
                loadPage(window.paths[1]);
                break;
            case window.card[2]:
                loadPage(window.paths[2]);
                break;
            case window.card[3]:
                loadPage(window.paths[3]);
                break;
            case window.card[4]:
                loadPage(window.paths[4]);
                break;
            case window.card[5]:
                loadPage(window.paths[5]);
                break;
            case window.card[6]:
                loadPage(window.paths[6]);
                break;
            case window.card[7]:
                loadPage(window.paths[7]);
                break;
            case window.card[8]:
                loadPage(window.paths[8]);
                break;
            case window.card[9]:
                loadPage(window.paths[9]);
                break;
            case window.card[10]:
                loadPage(window.paths[10]);
                break;
            case window.card[11]:
                loadPage(window.paths[11]);
                break;
            case window.card[12]:
                loadPage(window.paths[12]);
                break;
            case window.card[13]:
                loadPage(window.paths[13]);
                break;
            case window.card[14]:
                loadPage(window.paths[14]);
                break;
            case window.card[15]:
                loadPage(window.paths[15]);
                break;
            case window.card[16]:
                loadPage(window.paths[16]);
                break;
            case window.card[17]:
                loadPage(window.paths[17]);
                break;
            case window.card[18]:
                loadPage(window.paths[18]);
                break;
            case window.card[19]:
                loadPage(window.paths[19]);
                break;
            case window.card[20]:
                loadPage(window.paths[20]);
                break;
            case window.card[21]:
                loadPage(window.paths[21]);
                break;
            case window.card[22]:
                loadPage(window.paths[22]);
                break;
            case window.card[23]:
                loadPage(window.paths[23]);
                break;
            case window.card[24]:
                loadPage(window.paths[24]);
                break;
            case window.card[25]:
                loadPage(window.paths[25]);
                break;
            case window.card[26]:
                loadPage(window.paths[26]);
                break;
            case window.card[27]:
                loadPage(window.paths[27]);
                break;
            case window.card[28]:
                loadPage(window.paths[28]);
                break;
            case window.card[29]:
                loadPage(window.paths[29]);
                break;
            case window.card[30]:
                loadPage(window.paths[30]);
                break;
            case window.card[31]:
                loadPage(window.paths[31]);
                break;
            case window.card[32]:
                loadPage(window.paths[32]);
                break;
            case window.card[33]:
                loadPage(window.paths[33]);
                break;
            case window.card[34]:
                loadPage(window.paths[34]);
                break;
            case window.card[35]:
                loadPage(window.paths[35]);
                break;
            case window.card[36]:
                loadPage(window.paths[36]);
                break;
            case window.card[37]:
                loadPage(window.paths[37]);
                break;
            case window.card[38]:
                loadPage(window.paths[38]);
                break;
            case window.card[39]:
                loadPage(window.paths[39]);
                break;
            case window.card[40]:
                loadPage(window.paths[40]);
                break;
            case window.card[41]:
                loadPage(window.paths[41]);
                break;

        }
        
    }
}
getNfcId();

function delay(time) {
    return new Promise(resolve => setTimeout(resolve, time));
}