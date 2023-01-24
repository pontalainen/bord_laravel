const inputEl = document.getElementById("input-el");

inputEl.addEventListener("keypress", function (event) {
    if (event.key === "Enter") {
        event.preventDefault();
        let id = inputEl.value;
        window.location.href = `/bord/${id}`;
    }
});
