<?php
// Initialisez la session (si ce n'est pas déjà fait)
session_start();

// Détruisez la session pour effectuer la déconnexion
session_destroy();

// Redirigez l'utilisateur vers la page de connexion (login.php)
header('Location: index.html'); // Assurez-vous de spécifier le bon nom de fichier

// Assurez-vous que rien n'est affiché après la redirection
exit();
?>
