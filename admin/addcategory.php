<?php
include "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $categorie = $_POST['categorie'];
    $descr = $_POST['desc'];

    $fn = $_FILES["fileup"]["name"];
    $v1 = rand(1111, 9999);
    $v2 = rand(1111, 9999);
    $v3 = $v1 . $v2;
    $v3 = md5($v3);

    if ($con->connect_error) {
        die('Connection Failed : ' . $con->connect_error);
    } else {
        $dst = "./productimg/" . $v3 . $fn;
        $dst1 = "productimg/" . $v3 . $fn;

        if (move_uploaded_file($_FILES["fileup"]["tmp_name"], $dst)) {
            $sql = "INSERT INTO categorie (nom_cat, descrip_cat, image_cat) VALUES ('$categorie', '$descr', '$dst1')";
            if (mysqli_query($con, $sql)) {
                echo "<script>alert('Catégorie ajoutée avec succès')</script>";
                echo "<script>window.location.href='categorie.php'</script>";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($con);
            }
        } else {
            echo "Failed to upload the image.";
        }
    }
}
?>
