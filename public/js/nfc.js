export async function cardIdNfc(card) {
    return await new Promise((resolve) => {
    
        // Function scan after a nfc tag
        async function startScanning() {

            // Get refercens to nfc reader
            const ndef = new NDEFReader();

            // Start scaning for NFC tags
            ndef.scan().then(() => {
                    // Scan started successfully.

                    // If you get a error while reading a tag
                    ndef.addEventListener("readingerror", () => {
                        // Error! Cannot read data from the NFC tag. Try a different one?
                        resolve(error);

                    });
                    
                    // If you reading a tag successful
                    ndef.addEventListener("reading", ({ message, serialNumber }) => {
                            try{
                            if(card === "primary_card"){
                                document.querySelector(
                                    ".primary_card"
                                ).value = serialNumber;
                                resolve(serialNumber);
                            }
                            else{
                                document.querySelector(
                                    ".secondary_card"
                                ).value = serialNumber;
                                resolve(serialNumber);
                            }
                            }
                            catch{
                                resolve(serialNumber);
                            }
                                
                        
                        }
                    );
                    // If you get a error while reading a tag
                })
                .catch((error) => {
                    // Error! Scan failed to start: ${error}.
                    resolve(error);
                });
        }

        // Look if the device have NFC
        if ("NDEFReader" in window) {

            // Look if have permissions for a nfc is granted or not if permissions is not granded make a button that give browser permissions for nfc
            navigator.permissions.query({ name: "nfc" }).then((result) => {
                if (result.state === "granted") {

                    startScanning();
                    
                } else if (result.state === "prompt") {

                    // Show a scan button.
                    document.querySelector("#scanButton").style.display = "block";
                    document.querySelector("#scanButton").onclick = (event) => {

                        // Prompt user to allow to send and receive info when they tap NFC devices.
                        document.querySelector("#scanButton").style.display = "none";
                        
                        startScanning();
                    };
                }
            });
        } else {
            // If device have no nfc reader or browser does not support NDEFReader
            console.log("No nfc reader, or browser does not support NDEFReader");
        }
    });
}
