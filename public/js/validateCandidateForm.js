const form = document.querySelector(".add-candidate");
const select = form.querySelector("select");

form.addEventListener("submit", (e) => {
    if (select.value == "Choose a position") {
        e.preventDefault();
    }
});
