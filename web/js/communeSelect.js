$(function () {
    var availableCom = ["Ain",
        "Aisne",
        "Allier",
        "Alpes de Haute-Provence",
        "Alpes-Maritimes",
        "Ardèche",
        "Ardennes",
        "Ariège",
        "Aube",
        "Aude",
        "Aveyron",
        "Bas-Rhin",
        "Bouches du Rhône",
        "Calvados",
        "Cantal",
        "Charente",
        "Charente Maritime",
        "Cher",
        "Corrèze",
        "Corse du Sud",
        "Côte d'Or",
        "Côtes d'Armor",
        "Creuse",
        "Deux-Sèvres",
        "Dordogne",
        "Doubs",
        "Drôme",
        "Essonne",
        "Eure",
        "Eure-et-Loir",
        "Finistère",
        "Gard",
        "Gers",
        "Gironde",
        "Haut-Rhin",
        "Haute-Corse",
        "Haute-Garonne",
        "Haute-Loire",
        "Haute-Marne",
        "Haute-Saône",
        "Haute-Savoie",
        "Haute-Vienne",
        "Hautes-Alpes",
        "Hautes-Pyrénées",
        "Hauts-de-Seine",
        "Hérault",
        "Ille-et-Vilaine",
        "Indre",
        "Indre-et-Loire",
        "Isère",
        "Jura",
        "Landes",
        "Loir-et-Cher",
        "Loire",
        "Loire-Atlantique",
        "Loiret",
        "Lot",
        "Lot-et-Garonne",
        "Lozère",
        "Maine-et-Loire",
        "Manche",
        "Marne",
        "Mayenne",
        "Meurthe-et-Moselle",
        "Meuse",
        "Morbihan",
        "Moselle",
        "Nièvre",
        "Nord",
        "Oise",
        "Orne",
        "Paris",
        "Pas-de-Calais",
        "Puy-de-Dôme",
        "Pyrénées-Atlantiques",
        "Pyrénées-Orientales",
        "Rhône",
        "Saône-et-Loire",
        "Sarthe",
        "Savoie",
        "Seine-et-Marne",
        "Seine-Maritime",
        "Seine-St-Denis",
        "Somme",
        "Tarn",
        "Tarn-et-Garonne",
        "Territoire-de-Belfort",
        "Val-d'Oise",
        "Val-de-Marne",
        "Var",
        "Vaucluse",
        "Vendée",
        "Vienne",
        "Vosges",
        "Yonne",
        "Yvelines"
    ];

    $("#communes").autocomplete({
        appendTo: "#results",
        source: availableCom,
        open: function() {
            var position = $("#results").position(),
                left = position.left, top = position.top;

            $("#results ").css({
                top: top + 0 + "px" });

        }
    });

    /*
    $("#communes").autocomplete({
        source: availableCom
    });
*/
});

