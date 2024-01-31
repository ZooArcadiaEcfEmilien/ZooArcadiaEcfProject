document.addEventListener("DOMContentLoaded", function() {
    const recupLeFormulaire = () => {
        console.log("Réception du formulaire avec succès");
        alert("Formulaire envoyé avec succès ! Vous receverez une réponse sous 48h ouvré")
    };

    const envoiDuFormulaire = document.querySelector("#envoyerContact");
    envoiDuFormulaire.addEventListener("click", recupLeFormulaire);
});




/// envoiDuFormulaire.addEventListener.PageTransitionEvent