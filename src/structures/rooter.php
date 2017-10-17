<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = "Home";
}

switch ($page) {
    case 'Amrf':
        $linkPage = "publicAmrf.php";
        $titlePage = "A propos de l'AMRF";
        $container = true;
        $statut = "public";
        break;
    case 'FormContact':
        $linkPage = "publicFormContact.php";
        $titlePage = "Contact";
        $container = true;
        $statut = "public";
        break;
    case 'MentionsLegales':
        $linkPage = "publicMentionsLegales.php";
        $titlePage = "Mentions légales";
        $container = true;
        $statut = "public";
        break;
    case 'Home':
        $linkPage = "publicHome.php";
        $titlePage = "Accueil";
        $container = true;
        $statut = "public";
        break;
    case 'Confidential':
        $linkPage = "publicConfidential.php";
        $titlePage = "Confidetialité";
        $container = true;
        $statut = "public";
        break;
    case 'PlanSite':
        $linkPage = "publicPlanSite.php";
        $titlePage = "Plan du site";
        $container = true;
        $statut = "public";
        break;
    case 'MairesIndex':
        $linkPage = "privateMairesIndex.php";
        $titlePage = "Mon espace Maire";
        $container = true;
        $statut = "private";
        break;
    case 'MairesProfil':
        $linkPage = "privateMairesProfil.php";
        $titlePage = "Mon compte";
        $container = true;
        $statut = "private";
        break;
    case 'MairesFormProjet':
        $linkPage = "privateMairesFormProjet.php";
        $titlePage = "Création de projets";
        $container = false;
        $statut = "private";
        break;
    case 'MairesProjets':
        $linkPage = "privateMairesProjets.php";
        $titlePage = "Mes projets";
        $container = true;
        $statut = "private";
        break;
    case 'PartIndex':
        $linkPage = "privatePartIndex.php";
        $titlePage = "Mon espace Partenaire";
        $container = true;
        $statut = "private";
        break;
    case 'PartProfil':
        $linkPage = "privatePartProfil.php";
        $titlePage = "Mon compte";
        $container = true;
        $statut = "private";
        break;
    case 'PartFormFiche':
        $linkPage = "privatePartFormFiche.php";
        $titlePage = "Créer ma fiche";
        $container = false;
        $statut = "private";
        break;
    case 'PartListe':
        $linkPage = "privatePartListe.php";
        $titlePage = "Trouver des partenaires";
        $container = true;
        $statut = "private";
        break;
    case 'AdminIndex':
        $linkPage = "privateAdminIndex.php";
        $titlePage = "Mon espace Administrateur";
        $container = false;
        $statut = "private";
        break;
    case 'AdminGestionAccueil':
        $linkPage = "privateAdminGestionAccueil.php";
        $titlePage = "Gérer la page d'accueil";
        $container = false;
        $statut = "private";
        break;
    case 'AdminProjets':
        $linkPage = "privateAdminProjets.php";
        $titlePage = "Gérer les fiches projets";
        $container = false;
        $statut = "private";
        break;
    case 'AdminUsers':
        $linkPage = "privateAdminUsers.php";
        $titlePage = "Gérer les Utilisateurs";
        $container = false;
        $statut = "private";
        break;
    case 'AdminStat':
        $linkPage = "privateAdminStat.php";
        $titlePage = "consulter les statistiques";
        $container = false;
        $statut = "private";
        break;
    case 'RechercheProjet':
        $linkPage = "privateRechercheProjet.php";
        $titlePage = "Chercher des projets";
        $container = true;
        $statut = "private";
        break;
    case 'Favoris':
        $linkPage = "privateFavoris.php";
        $titlePage = "consulter mes favoris";
        $container = true;
        $statut = "private";
        break;
    case 'Projet':
        $linkPage = "privateProjet.php";
        $titlePage = "consulter une fiche projet";
        $container = true;
        $statut = "private";
        break;
    case 'exemple':
        $linkPage = "exemple.php";
        $titlePage = "Exemple CSS";
        $container = true;
        $statut = "public";
        break;
    default:
        $linkPage = "publicHome.php";
        $titlePage = "Accueil";
        $container = true;
        $statut = "public";
        break;
}
?>