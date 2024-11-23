document.addEventListener('DOMContentLoaded', async function () {
    let slideIndex = 0;
    showSlide(slideIndex);

    let timer = setInterval(nextSlide, 9000);

    const updateStarColors = (rating) => {
        const stars = document.querySelectorAll('#commentSection .star');
        stars.forEach((star, index) => {
            star.style.color = index < rating ? 'yellow' : 'black';
        });
    };

    const toggleCommentSection = () => {
        const commentSection = document.getElementById('commentSection');
        isCommentVisible = !isCommentVisible;
        commentSection.style.display = isCommentVisible ? 'block' : 'none';
    };

    let isCommentVisible = false;

    document.getElementById('adviceBtn').addEventListener('click', toggleCommentSection);

    document.querySelectorAll('#commentSection .star').forEach((star, index) => {
        star.addEventListener('mouseover', () => updateStarColors(index + 1));
        star.addEventListener('mouseout', () => {
            const rating = parseInt(document.querySelector('#rating').dataset.rating) || 0;
            updateStarColors(rating);
        });
        star.addEventListener('click', () => {
            const rating = index + 1;
            document.querySelector('#rating').dataset.rating = rating;
            updateStarColors(rating);
        });
    });

    const validateInput = (input) => input && input.trim().length > 0;

    document.getElementById('sendBtn').addEventListener('click', async () => {
        const pseudo = document.getElementById('pseudo').value.trim();
        const rating = parseInt(document.querySelector('#rating').dataset.rating) || 0;
        const comment = document.getElementById('comment').value.trim();

        if (!validateInput(pseudo) || !validateInput(comment) || rating === 0) {
            alert("Tous les champs doivent être remplis et une note doit être donnée.");
            return;
        }

        try {
            const response = await fetch('http://localhost:8888/Zoo/api/reviews.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-Token': 'votre_token_csrf',
                },
                body: JSON.stringify({ pseudo, rating, comment }),
            });

            if (!response.ok) {
                throw new Error(`Erreur lors de l'envoi : ${response.statusText}`);
            }

            const result = await response.json();
            console.log("Réponse de l'API:", result); // Log pour vérifier la réponse

            // Si tout est OK, on affiche le message
            alert("Votre avis a été envoyé avec succès!");

            // Stocker les données dans le localStorage (sécurisé pour cette application)
            localStorage.setItem('pseudo', pseudo);
            localStorage.setItem('rating', rating.toString());
            localStorage.setItem('comment', comment);

            document.getElementById('commentForm').reset();
            updateStarColors(0);
        } catch (error) {
            console.error("Erreur lors de l'envoi de l'avis :", error);
            alert("Une erreur est survenue. Veuillez réessayer.");
        }
    });
});
