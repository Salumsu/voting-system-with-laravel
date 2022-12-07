const form = document.querySelector("form");

positions = positions.map((position) => position.position.replace(" ", "_"));

form.addEventListener("submit", (e) => {
    for (let i = 0; i < positions.length; i++) {
        let position = positions[i];
        let boxes = document.querySelectorAll(`.${position}`);
        let limit = boxes[0].parentNode.parentNode.dataset["limit"];

        let checkCount = 0;
        boxes.forEach((box) => {
            if (box.checked) {
                checkCount++;
            }
        });

        if (checkCount < limit) {
            e.preventDefault();
            alert(`${position} requires ${limit} number of choice(s)`);
            break;
        }
    }
});
