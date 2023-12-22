import './styles/header.scss';

//#region ------------------- Accordion -------------------
// Attend que le DOM (Document Object Model) soit entièrement chargé avant d'exécuter le code
document.addEventListener('DOMContentLoaded', function () {
    // Sélectionne tous les éléments ayant la classe CSS 'accordion-item' et les stocke dans un tableau
    const accordionItems = document.querySelectorAll('.accordion-item');

    // Pour chaque élément de l'accordéon, ajoute un écouteur d'événements au bouton d'accordéon
    accordionItems.forEach((item) => {
        // Sélectionne le bouton spécifique à cet élément
        const accordionButton = item.querySelector('.accordion-button');

        // Ajoute un écouteur d'événements au clic sur le bouton
        accordionButton.addEventListener('click', () => {
            // Ferme tous les accordeons
            accordionItems.forEach((otherItem) => {
                if (otherItem !== item) {
                    otherItem.querySelector('.accordion-collapse').classList.remove('show');
                }
            });

            // Ouvrez ou fermez l'élément de l'accordéon actuel en basculant la classe CSS 'show' sur l'élément de collapse (rétraction)
            const collapse = item.querySelector('.accordion-collapse');
            collapse.classList.toggle('show');
        });
    });
});


//#endregion ------------------- Accordion -------------------