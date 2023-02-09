import { cardIdNfc } from "./nfc.js";

getNfcId();
async function getNfcId(){
    let cardId;
    let oldCardId;    

    while(true){

        cardId = await cardIdNfc("none");

        if(cardId !== oldCardId){
            if(window.airCard.findIndex((element) => element === cardId)){
                let indexId = window.airCard.findIndex((element) => element === cardId);
                window.location.pathname = "/bord/" + window.id[indexId];
            }
        }

        oldCardId = cardId;
        
    }
}
