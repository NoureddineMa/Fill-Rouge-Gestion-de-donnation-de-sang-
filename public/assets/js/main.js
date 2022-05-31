let nums = document.querySelectorAll(".nums .num");
let section = document.querySelector(".three");
let started = false; // function Started ? No :)
let off = section.offsetTop - 600;


window.onscroll = function() {
    if (window.scrollY >= off) {
        if (!started) {
            nums.forEach((num) => startCount(num));
        }
        started = true;
    }
};


function startCount(el) {
    let goal = el.dataset.goal;
    let count = setInterval(() => {
        el.textContent++;
        if (el.textContent == goal) {
            clearInterval(count);
        }
    }, 20 / goal);
}