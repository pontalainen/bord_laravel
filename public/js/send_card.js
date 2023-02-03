import { cardIdNfc } from "./nfc.js";

const primaryCard = document.querySelectorAll(".primary_card");
const secondaryCard = document.querySelectorAll(".secondary_card");

primaryCard.forEach((element) => {
    element.addEventListener("click", async function () {
        try {
            const idInput = await cardIdNfc();
            if (idInput !== undefined) {
                this.value = idInput;
            } else {
                this.value = "hej";
            }
        } catch (error) {
            this.value = error;
        }
    });
});

secondaryCard.forEach((element) => {
    element.addEventListener("click", async function () {
        const idInput = await cardIdNfc();
        this.value = idInput;
    });
});
