
  document.addEventListener('DOMContentLoaded', function() {

    let slideIndex = 0;
    showSlide(slideIndex);

    // Définir la fonction de minuterie pour faire défiler automatiquement le carrousel
    let timer = setInterval(nextSlide, 9000); // Changez 3000 pour ajuster la durée entre chaque diapositive (en millisecondes)

    
    
  
    // Fonction pour mettre à jour la couleur des étoiles
    function updateStarColors(rating) {
        var stars = document.querySelectorAll('#commentSection .star');
        stars.forEach(function(star, index) {
            if (index < rating) {
                star.style.color = 'yellow'; // Étoiles jaunes
            } else {
                star.style.color = 'black'; // Étoiles vides
            }
        });
    }

    // Fonction pour afficher ou masquer la section de commentaire
    function toggleCommentSection() {
        var commentSection = document.getElementById('commentSection');
        if (!isCommentVisible) {
            commentSection.style.display = 'block';
            isCommentVisible = true;
        } else {
            commentSection.style.display = 'none';
            isCommentVisible = false;
        }
    }

    var isCommentVisible = false;

    // Écouter les clics sur le bouton "Laisser un avis"
    document.getElementById('adviceBtn').addEventListener('click', function() {
        toggleCommentSection();
    });

    // Écouter les survols de la souris sur les étoiles et mettre à jour la couleur des étoiles
    document.querySelectorAll('#commentSection .star').forEach(function(star, index) {
        star.addEventListener('mouseover', function() {
            updateStarColors(index + 1); // Mettre à jour la couleur des étoiles au survol de la souris
        });

        star.addEventListener('mouseout', function() {
            var rating = parseInt(document.getElementById('rating').value);
            updateStarColors(rating); // Mettre à jour la couleur des étoiles avec la note actuelle
        });

        star.addEventListener('click', function() {
            var rating = index + 1;
            document.getElementById('rating').value = rating; // Mettre à jour la valeur du champ de notation
            updateStarColors(rating); // Mettre à jour la couleur des étoiles après le clic
        });
    });

    // Écouter les changements de la note via le champ de notation
    document.getElementById('rating').addEventListener('input', function() {
        var rating = parseInt(this.value);
        updateStarColors(rating); // Mettre à jour la couleur des étoiles lorsque la note change
    });

    // Mettre à jour la couleur des étoiles au chargement de la page
    var initialRating = parseInt(document.getElementById('rating').value);
    updateStarColors(initialRating);

    // Écouter les changements de la note via le champ de notation
    var ratingInput = document.getElementById('rating');
    if (ratingInput) {
        ratingInput.addEventListener('input', function() {
            var rating = parseInt(this.value);
            updateStarColors(rating); // Mettre à jour la couleur des étoiles lorsque la note change
        });
    } else {
        console.error("Champ de notation introuvable dans le document.");
    }
    // Mettre à jour la valeur du champ de notation
    if (ratingInput) {
        ratingInput.value = rating;
    }

    // Lorsque l'utilisateur poste un avis
    document.getElementById('sendBtn').addEventListener('click', function() {
        var pseudo = document.getElementById('pseudo').value;
        var rating = document.getElementById('rating').value;
        var comment = document.getElementById('comment').value;

        // Stocker les données dans le localStorage
        localStorage.setItem('pseudo', pseudo);
        localStorage.setItem('rating', rating);
        localStorage.setItem('comment', comment);

        // Afficher un message de confirmation
        alert("Votre avis a été envoyé avec succès!");

        // Réinitialiser le formulaire
        document.getElementById('commentForm').reset();
    });

});

function toggleExtraContent() {
    var extraContent = document.querySelector('.extra-content');
    var toggleBtn = document.querySelector('.toggle-btn');

    if (extraContent.style.display === 'none' || extraContent.style.display === '') {
        extraContent.style.display = 'inline'; // Afficher le texte supplémentaire
        toggleBtn.textContent = 'Voir moins'; // Changer le texte du bouton
    } else {
        extraContent.style.display = 'none'; // Masquer le texte supplémentaire
        toggleBtn.textContent = 'Voir plus'; // Changer le texte du bouton
    }
}


function toggleExtraContent1() {
    var extraContent1 = document.querySelector('.extra-content1');
    var toggleBtn1 = document.querySelector('.toggle-btn1');

    if (extraContent1.style.display === 'none' || extraContent1.style.display === '') {
        extraContent1.style.display = 'inline'; // Afficher le texte supplémentaire
        toggleBtn1.textContent = 'Voir moins'; // Changer le texte du bouton
    } else {
        extraContent1.style.display = 'none'; // Masquer le texte supplémentaire
        toggleBtn1.textContent = 'Voir plus'; // Changer le texte du bouton
    }
}

