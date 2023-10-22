<?php
session_start();

if (isset($_SESSION['id_admin'])) {
    include 'connect.php';

    if ($con->connect_error) {
        die("Erreur de connexion à la base de données : " . $con->connect_error);
    }

    $id_admin = $_SESSION['id_admin'];
    $sql = "SELECT id_admin, email FROM administrateur WHERE id_admin = $id_admin";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Construisez la page HTML avec un style de base
        echo "<!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='utf-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
            <title>Votre Profil</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    background-color: #f5f5f5;
                    margin: 0;
                    padding: 0;
                }
                .container {
                    max-width: 600px;
                    margin: 0 auto;
                    padding: 20px;
                    background-color: #fff;
                    border-radius: 5px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                }
                h1 {
                    color: #333;
                }
                p {
                    margin: 10px 0;
                }
                form {
                    margin-top: 20px;
                }
                input[type='password'] {
                    width: 100%;
                    padding: 10px;
                    margin-bottom: 10px;
                    border: 1px solid #ccc;
                }
                button {
                    background-color: #007bff;
                    color: #fff;
                    padding: 10px 20px;
                    border: none;
                    cursor: pointer;
                }
            </style>
        </head>
        <body>
        <div class='container'>
            <h1>Votre Profil</h1>
            <p>ID : " . $row['id_admin'] . "</p>
            <p>Email : " . $row['email'] . "</p>
            <form action='changer_mot_de_passe.php' method='post'>
                <input type='password' name='nouveau_mot_de_passe' placeholder='Nouveau mot de passe'>
                <button type='submit'>Changer le mot de passe</button>
            </form>
        </div>
        </body>
        </html>";
    } else {
        echo "Aucun utilisateur trouvé dans la base de données.";
    }

    $con->close();
} else {
    header('Location: login.php');
}
?>