<?php
include "connect.php";

if ($con->connect_error) {
    die('Connection Failed: ' . $con->connect_error);
}

if (isset($_POST['registerbtn'])) {
    $v1 = rand(1111, 9999);
    $v2 = rand(1111, 9999);
    $v3 = $v1 . $v2;
    $v3 = md5($v3);

    $plat = $_POST['nomp'];
    $prix = $_POST['prixplat'];
    $cal = $_POST['nbrcal'];
    $cate = $_POST['category'];
    $ingred = $_POST['ingredients'];

    $fn = $_FILES["fileup"]["name"];
    $dst = "./productimg/" . $v3 . $fn;
    $dst1 = "productimg/" . $v3 . $fn;
    move_uploaded_file($_FILES["fileup"]["tmp_name"], $dst);

    // Assurez-vous que la catégorie existe avant d'insérer le plat
    $checkCategory = mysqli_query($con, "SELECT * FROM categorie WHERE id_cat = '$cate'");
    if (mysqli_num_rows($checkCategory) > 0) {
        $sql = "INSERT INTO plat (nomplat, prix, nbr_calories, id_cat, image, ingredients) VALUES('$plat', '$prix', '$cal', '$cate', '$dst1', '$ingred')";
        $result = mysqli_query($con, $sql);
        if ($result) {
            echo "<script>window.location.href='plat.php'</script>";
        } else {
            echo "Erreur lors de l'insertion du plat : " . mysqli_error($con);
        }
    } else {
        echo "La catégorie sélectionnée n'existe pas.";
    }
}
?>
