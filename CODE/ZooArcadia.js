//document.addEventListener("DOMContentLoaded", function() {
 //   const recupLeFormulaire = () => {
   //     console.log("Réception du formulaire avec succès");
     //   alert("Formulaire envoyé avec succès ! Vous receverez une réponse sous 48h ouvré")
    //};

    //const envoiDuFormulaire = document.querySelector("#envoyerContact");
    //envoiDuFormulaire.addEventListener("click", recupLeFormulaire);
//});




/// envoiDuFormulaire.addEventListener.PageTransitionEvent


// VERSION MOBILE FIRST

//if (window.innerWidth <= 600) {
 //   var elementsToHide = document.querySelectorAll('.element-a-cacher');
   // elementsToHide.forEach(function(element) {
     // element.style.display = 'none';
   // });
  //}

  //Ouverture du menu version mobile
  document.addEventListener('DOMContentLoaded', function() {
    const menuBtn = document.querySelector('.menu-btn');
    const navMenu = document.querySelector('.nav-menu');
  
    menuBtn.addEventListener('click', function() {
      navMenu.classList.toggle('active');
    });
  });
  

