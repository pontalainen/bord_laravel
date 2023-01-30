const preview = document.querySelector("#preview");
const previewEl = document.querySelector("#preview-el");
const imgDiv = document.getElementById("img-div");

document
    .querySelector("input[type='file']")
    .addEventListener("change", function () {
        previewEl.style.display = "flex";
        imgDiv.style.display = "none";

        var file = this.files[0];
        var reader = new FileReader();

        reader.onloadend = function () {
            preview.src = reader.result;
        };

        if (file) {
            reader.readAsDataURL(file);
        } else {
            preview.src = "";
        }
    });
