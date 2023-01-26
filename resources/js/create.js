document
    .querySelector("input[type='file']")
    .addEventListener("change", function () {
        var file = this.files[0];
        var reader = new FileReader();

        reader.onloadend = function () {
            document.querySelector("#preview").src = reader.result;
        };

        if (file) {
            reader.readAsDataURL(file);
        } else {
            document.querySelector("#preview").src = "";
        }
    });
