import { cardIdNfc } from "./nfc.js";

const primaryCard = document.querySelectorAll(".primary_card");
const secondaryCard = document.querySelectorAll(".secondary_card");

async function cardId() {
    let id = await cardIdNfc();
    return id;
}

primaryCard.forEach((element) => {
    element.addEventListener("click", function () {
        this.value = cardId();
    });
});

secondaryCard.forEach((element) => {
    element.addEventListener("click", function () {
        this.value = cardId();
    });
});
