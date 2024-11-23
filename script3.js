document.addEventListener('DOMContentLoaded', () => {
    // URL de l'API pour gérer les avis
    const API_URL = 'https://example.com/api/reviews';

    // Fonction pour afficher les avis depuis l'API
    const afficherAvis = (avis) => {
        const avisVisiteurs = document.getElementById('avisVisiteurs');
        avisVisiteurs.innerHTML = ''; // Effacer les anciens avis

        avis.forEach(({ id, pseudo, rating, comment }) => {
            const avisElement = document.createElement('div');
            avisElement.classList.add('avis');
            avisElement.setAttribute('data-id', id); // Utiliser l'ID fourni par l'API

            avisElement.innerHTML = `
                <p><strong>Pseudo :</strong> <span class="pseudo">${pseudo}</span></p>
                <p><strong>Note :</strong> <span class="rating">${rating}</span></p>
                <p><strong>Avis :</strong> <span class="comment">${comment}</span></p>
                <button class="valider-btn">Valider</button>
                <button class="refuser-btn">Refuser</button>
            `;

            // Ajouter les écouteurs pour valider ou refuser les avis
            avisElement.querySelector('.valider-btn').addEventListener('click', () => {
                if (confirm("Êtes-vous sûr de vouloir valider cet avis ?")) {
                    supprimerAvis(id, true); // Valider l'avis
                }
            });

            avisElement.querySelector('.refuser-btn').addEventListener('click', () => {
                if (confirm("Êtes-vous sûr de vouloir refuser cet avis ?")) {
                    supprimerAvis(id, false); // Refuser l'avis
                }
            });

            avisVisiteurs.appendChild(avisElement);
        });
    };

    // Fonction pour récupérer les avis depuis l'API
    const chargerAvis = async () => {
        try {
            const response = await fetch(`${API_URL}`);
            if (!response.ok) throw new Error("Erreur lors du chargement des avis.");
            const avis = await response.json();
            afficherAvis(avis);
        } catch (error) {
            console.error("Erreur:", error);
        }
    };

    // Fonction pour supprimer un avis (valider ou refuser)
    const supprimerAvis = async (id, valider) => {
        try {
            const response = await fetch(`${API_URL}/${id}`, {
                method: 'DELETE',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ valider })
            });

            if (!response.ok) throw new Error("Erreur lors de la mise à jour de l'avis.");
            alert(`L'avis a été ${valider ? 'validé' : 'refusé'}.`);
            chargerAvis(); // Recharger les avis après suppression
        } catch (error) {
            console.error("Erreur:", error);
        }
    };

    // Charger les avis au démarrage
    chargerAvis();
});
