$(function() {
    "use strict";

    // Fonction pour gérer le clic sur un lien du menu
    $('#sidebarnav a').on('click', function (e) {
        // Vérifier si le lien a la classe "has-arrow" (menu déroulant)
        if ($(this).hasClass("has-arrow")) {
            e.preventDefault(); // Empêcher le comportement par défaut du lien
            
            // Trouver l'élément "ul" suivant
            var nextUl = $(this).next("ul");

            // Si le lien n'a pas déjà la classe "active"
            if (!$(this).hasClass("active")) {
                // Fermer tous les autres sous-menus
                $("ul", $(this).parents("ul:first")).removeClass("in");
                $("a", $(this).parents("ul:first")).removeClass("active");

                // Ouvrir le sous-menu correspondant
                nextUl.addClass("in");
                $(this).addClass("active");
            } else {
                // Fermer le sous-menu si le lien est déjà actif
                nextUl.removeClass("in");
                $(this).removeClass("active");
            }
        }
    });

    // Fonction pour gérer le clic sur un lien principal avec un sous-menu
    $('#sidebarnav > li > a.has-arrow').on('click', function (e) {
        e.preventDefault(); // Empêcher le comportement par défaut du lien
    });
});
