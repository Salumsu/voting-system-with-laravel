let current = 0;

let container = document.querySelector(".slide-container");

let frames = container.querySelectorAll(".section");

let prev = container.querySelector(".prev");
let next = container.querySelector(".next");
let submit = container.querySelector('button[type="submit"]');

function updateView() {
    if (current == 0) {
        prev.classList.remove("active");
    } else {
        if (!prev.classList.contains("active")) {
            prev.classList.add("active");
        }
    }

    if (current == frames.length - 1) {
        next.classList.remove("active");
        if (!submit.classList.contains("active")) {
            submit.classList.add("active");
        }
    } else {
        submit.classList.remove("active");
        if (!next.classList.contains("active")) {
            next.classList.add("active");
        }
    }

    for (let i = 0; i < frames.length; i++) {
        let frame = frames[i];

        if (i == current) {
            frame.classList.add("current");
            frame.classList.remove("done");
            frame.classList.remove("next");
        } else if (i < current) {
            frame.classList.remove("current");
            frame.classList.add("done");
            frame.classList.remove("next");
        } else {
            frame.classList.remove("current");
            frame.classList.remove("done");
            frame.classList.add("next");
        }
    }
}

updateView();

prev.addEventListener("click", () => {
    if (current == 0) return;
    current--;
    updateView();
});

next.addEventListener("click", () => {
    if (current == frames.length - 1) return;
    current++;
    updateView();
});
