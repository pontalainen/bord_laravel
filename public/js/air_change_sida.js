import { cardIdNfc } from "./nfc.js";

getNfcId();
async function getNfcId(){
    let cardId;    

    while(true){
        cardId = await cardIdNfc("none");


        switch (cardId){
            case window.airCard[0]:
                window.location.pathname = "/bord/" + window.id[0];
                break;
            case window.airCard[1]:
                window.location.pathname = "/bord/" + window.id[1];
                break;
            case window.airCard[2]:
                window.location.pathname = "/bord/" + window.id[2];
                break;
            case window.airCard[3]:
                window.location.pathname = "/bord/" + window.id[3];
                break;
            case window.airCard[4]:
                window.location.pathname = "/bord/" + window.id[4];
                break;
            case window.airCard[5]:
                window.location.pathname = "/bord/" + window.id[5];
                break;
            case window.airCard[6]:
                window.location.pathname = "/bord/" + window.id[6];
                break;
            case window.airCard[7]:
                window.location.pathname = "/bord/" + window.id[7];
                break;
            case window.airCard[8]:
                window.location.pathname = "/bord/" + window.id[8];
                break;
            case window.airCard[9]:
                window.location.pathname = "/bord/" + window.id[9];
                break;
            case window.airCard[10]:
                window.location.pathname = "/bord/" + window.id[10];
                break;
            case window.airCard[11]:
                window.location.pathname = "/bord/" + window.id[11];
                break;
            case window.airCard[12]:
                window.location.pathname = "/bord/" + window.id[12];
                break;
            case window.airCard[13]:
                window.location.pathname = "/bord/" + window.id[13];
                break;
            case window.airCard[14]:
                window.location.pathname = "/bord/" + window.id[14];
                break;
        }


    }
}
