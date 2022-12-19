var hearts = document.querySelectorAll('.heart');
var hearts = Array.from(hearts);

console.log(hearts);

hearts.forEach(function (heart) {
    heart.addEventListener('click', e=>{ getClasses(e) });
});

function getClasses(e) {
    console.log(e);
    heart_class = e.target.classList[7];
    console.log(heart_class);
    that_heart = document.querySelector(`.${heart_class}`);
    console.log(that_heart.classList);
    that_heart.classList.toggle('fas');
    // that_heart.classList.toggle('fill');
}