const searchBtn = document.getElementById("search-btn");
const inputEl = document.getElementById("input-el");

searchBtn.addEventListener("click", function search() {
    let id = inputEl.value;
    window.location.href = `/bord/${id}`;
});
