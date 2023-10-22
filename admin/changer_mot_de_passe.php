<?php
session_start();

if (isset($_SESSION['id_admin'])) {
    include 'connect.php';

    if ($con->connect_error) {
        die("Erreur de connexion à la base de données : " . $con->connect_error);
    }

    // Vérifiez si le formulaire a été soumis
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Récupérez le nouveau mot de passe depuis le formulaire
        $nouveau_mot_de_passe = $_POST['nouveau_mot_de_passe'];

        // Assurez-vous que le nouveau mot de passe n'est pas vide
        if (!empty($nouveau_mot_de_passe)) {
            $id_admin = $_SESSION['id_admin'];
            // Mettez à jour le mot de passe dans la base de données (veuillez utiliser le cryptage approprié ici)
            $nouveau_mot_de_passe = mysqli_real_escape_string($con, $nouveau_mot_de_passe);
            $sql = "UPDATE administrateur SET motdepasse = '$nouveau_mot_de_passe' WHERE id_admin = $id_admin";
            if ($con->query($sql) === true) {
                echo "Mot de passe mis à jour avec succès.";
            } else {
                echo "Erreur lors de la mise à jour du mot de passe : " . $con->error;
            }
        } else {
            echo "Le champ du nouveau mot de passe ne peut pas être vide.";
        }
    }

    // Vous pouvez ajouter des liens de retour à la page de profil ou à d'autres pages ici
    echo "<a href='profile.php'>Retour à votre profil</a>";

    $con->close();
} else {
    header('Location: login.php');
}
?>
