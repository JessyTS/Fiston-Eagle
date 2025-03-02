<?php
    require_once __DIR__ . DIRECTORY_SEPARATOR . 'private' . DIRECTORY_SEPARATOR . 'function.php';
    session_start();
    date_default_timezone_set('Europe/Paris');
    $protocol = (isset($_SERVER['HTTPS'])) ? 'https' : 'http';
    /**
     * Summary of Connect_BDD()
     * Fonction pour La liaison à la base de donnnée
     * @return mysqli $connexion La variable de connexion qui est un objet
     */
    function Connect_BDD():mysqli {
        if (isset($_SERVER['HTTPS'])) {
            $serveur = "173.252.167.40";
            $utilisateur = "fistonea_meta";
            $mot_de_passe = "Azertyuiop.com123";
            $base_de_donnees = "fistonea_meta";
            $connexion = new mysqli($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);
            $connexion->set_charset('utf8mb4');
            return $connexion;
        } else {
            $serveur = "localhost";
            $utilisateur = "root";
            $mot_de_passe = "";
            $base_de_donnees = "eagle";
            $connexion = new mysqli($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);
            $connexion->set_charset('utf8mb4');
            return $connexion;
        }
    }
?>