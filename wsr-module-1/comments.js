let slidesIndex = 1;
showSlides(slidesIndex);


function plusSlide() {
    showSlides(slidesIndex += 1);
}

function minusSlide() {
    showSlides(slidesIndex -= 1);  
}

function currentSlide(n) {
    showSlides(slidesIndex = n);
}


function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("item-slider");
    if (n > slides.length) {
        slidesIndex = 1
    }
    if (n < 1) {
        slidesIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slidesIndex - 1].style.display = "block";
}


let prev = document.querySelector('.prev');
prev.onclick = () => minusSlide();

let next = document.querySelector('.next');
next.onclick = () => plusSlide();