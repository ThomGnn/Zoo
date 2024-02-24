let slideIndex = 0;
showSlide(slideIndex);

// Définir la fonction de minuterie pour faire défiler automatiquement le carrousel
let timer = setInterval(nextSlide, 9000); // Changez 3000 pour ajuster la durée entre chaque diapositive (en millisecondes)

function nextSlide() {
    showSlide(slideIndex += 1);
}

function prevSlide() {
    showSlide(slideIndex -= 1);
}

function showSlide(n) {
    let slides = document.getElementsByClassName("slide");
    if (n >= slides.length) { slideIndex = 0; }
    if (n < 0) { slideIndex = slides.length - 1; }
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex].style.display = "block";
}
