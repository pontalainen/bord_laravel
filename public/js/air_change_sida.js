import { cardIdNfc } from "./nfc.js";

async function getNfcId(){
    let cardId;    

    while(true){
        cardId = await cardIdNfc("none");
        alert(cardId);


        switch (cardId){
            case window.card[0]:
                window.location.pathname = "/bord/" + window.id[0];
                break;
            case window.card[1]:
                window.location.pathname = "/bord/" + window.id[1];
                break;
            case window.card[2]:
                window.location.pathname = "/bord/" + window.id[2];
                break;
            case window.card[3]:
                window.location.pathname = "/bord/" + window.id[3];
                break;
            case window.card[4]:
                window.location.pathname = "/bord/" + window.id[4];
                break;
            case window.card[5]:
                window.location.pathname = "/bord/" + window.id[5];
                break;
            case window.card[6]:
                window.location.pathname = "/bord/" + window.id[6];
                break;
            case window.card[7]:
                window.location.pathname = "/bord/" + window.id[7];
                break;
            case window.card[8]:
                window.location.pathname = "/bord/" + window.id[8];
                break;
            case window.card[9]:
                window.location.pathname = "/bord/" + window.id[9];
                break;
            case window.card[10]:
                window.location.pathname = "/bord/" + window.id[10];
                break;
            case window.card[11]:
                window.location.pathname = "/bord/" + window.id[11];
                break;
            case window.card[12]:
                window.location.pathname = "/bord/" + window.id[12];
                break;
            case window.card[13]:
                window.location.pathname = "/bord/" + window.id[13];
                break;
            case window.card[14]:
                window.location.pathname = "/bord/" + window.id[14];
                break;
        }


    }
}

getNfcId();