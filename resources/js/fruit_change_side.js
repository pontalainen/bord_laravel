const iframe1 = document.getElementById("leftIframe");
const iframe2 = document.getElementById("rightIframe");
const sideBtn = document.querySelector(".side-btn");

let sideToLoadOn = "left";

window.onload = (event) => {
    console.log("hello wourld");
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

sideBtn.addEventListener("click", function () {
    if (sideToLoadOn === "left") {
        changeUrl("side", "right");
        sideToLoadOn = "right";
        sideBtn.innerHTML = "Höger sidan";
    } else if (sideToLoadOn === "right") {
        changeUrl("side", "left");
        sideToLoadOn = "left";
        sideBtn.innerHTML = "Vänster sidan";
    }
});

window.addEventListener("click", function () {
    /*if (sideToLoadOn === "left") {
        changeUrl("side", "right");
        sideToLoadOn = "right";
        sideBtn.innerHTML = "Höger sidan";
    } else if (sideToLoadOn === "right") {
        changeUrl("side", "left");
        sideToLoadOn = "left";
        sideBtn.innerHTML = "Vänster sidan";
    }*/
    /*changeUrl("side", "right");
    sideToLoadOn = "right";
    sideBtn.innerHTML = "Höger sidan";
    console.log("hej");*/
});
iframe1.contentWindow.addEventListener("click", function () {
    changeUrl("side", "right");
    sideToLoadOn = "right";
    sideBtn.innerHTML = "Höger sidan";
    console.log("hej");
});

iframe2.contentWindow.addEventListener("click", function () {
    changeUrl("side", "right");
    sideToLoadOn = "right";
    sideBtn.innerHTML = "Höger sidan";
    console.log("hej");
});

async function loadPage(a) {
    if (sideToLoadOn === "left") {
        iframe1.src = a;
        let innerDoc = iframe1.contentWindow.document;

        var link = document.createElement("link");
        link.type = "text/css";
        link.rel = "stylesheet";
        link.href = "left.css";

        innerDoc.querySelector("head").appendChild(link);
        console.log(innerDoc.querySelector("head").innerHTML);
    } else if (sideToLoadOn === "right") {
        iframe2.src = a;
        let innerDoc = iframe2.contentWindow.document;

        innerDoc.querySelector(".container").classList.add("right");
    }
}

window.addEventListener("keydown", function (a) {
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
        case "c":
            console.log(
                iframe1.contentWindow.document.querySelector("head").innerHTML
            );
    }
});
