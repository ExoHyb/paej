<?php include "header.php"; ?>
<div class="container">
    <!-- Ouverture ROW présentation PAEJ -->
    <?php include "presentation.php"; ?>
    <!-- Fermeture ROW présentation PAEJ -->
    <!-- Ouverture ROW pour Actualités et Action -->
    <div class="row">
        <!-- Ouverture Colonne pour Actualités -->
        <?php include "actualites.php"; ?>
        <!-- Fermeture Colonne pour Actualités -->
        <!-- Ouverture Colonne pour Action -->
        <?php include "activites.php"; ?>
        <!-- Fermeture Colonne pour Action -->
    </div>
    <!-- Fermeture ROW pour Actualités et Action -->
    <!-- Ouverture ROW pour Questions Fréquentes -->
    <?php include "faq_accueil.php"; ?>
    <!-- Fermeture ROW pour QUestions Fréquentes -->
    <!-- Code Embed FACEBOOK -->
    <div class="row">
        <?php include "facebook.php"; ?>
        <?php include "contact.php"; ?>
    </div>
    <!-- Fin code embed Facebook -->
</div>
<?php include "footer.php"; ?>
