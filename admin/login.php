<?php
session_start();

$email = $_POST['email'];
$password = $_POST['password'];
include "connect.php";

$req = "SELECT * FROM administrateur WHERE email = '" . mysqli_real_escape_string($con, $email) . "' AND motdepasse = '" . mysqli_real_escape_string($con, $password) . "'";

$res = mysqli_query($con, $req);

if (mysqli_num_rows($res) == 1) {
    // L'utilisateur est connecté avec succès, initialisez la session
    session_start();
    $admin = mysqli_fetch_assoc($res);
    $_SESSION['id_admin'] = $admin['id_admin']; // Définissez l'ID de l'administrateur dans la session
    header("Location: dash.php");
} else {
    echo "<script>alert('incorrect user name or password')</script>";
    echo "<script>window.location.href='http://localhost:8080/myfitbox-master/admin/index.html'</script>";
}

?>
