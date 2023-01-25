// Sélectionnez votre conteneur de fiches
let container = document.querySelector('.cardContainer');
console.log("container", container);
// Sélectionnez toutes les fiches dans votre conteneur
let cards = container.querySelectorAll('.card');

// Ajoutez un gestionnaire d'événement pour détecter lorsque l'utilisateur utilise la roulette de la souris sur votre conteneur de fiches
container.addEventListener('mousewheel', function(event) {
  // Déplacez votre liste de fiches en fonction du défilement de la roulette de la souris
  this.scrollLeft += event.deltaY;
});

// Ajoute un écouteur d'événement pour l'événement "mouseover" sur cet élément
container.addEventListener('mouseover', function() {
    // Désactive temporairement le défilement de la page en désactivant les événements de défilement
    document.body.style.overflow = 'hidden';
    
});

// Ajoute un écouteur d'événement pour l'événement "mouseout" sur cet élément
container.addEventListener('mouseout', function() {
    // Réactive le défilement de la page en réactivant les événements de défilement
    document.body.style.overflow = 'auto';
});

function changeWidth() {
  let el = document
}