import { cardIdNfc } from "./nfc.js";

const primaryCard = document.querySelectorAll(".primary_card");
const secondaryCard = document.querySelectorAll(".secondary_card");

async function cardId() {
    const string = await cardIdNfc();
    return string;
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
