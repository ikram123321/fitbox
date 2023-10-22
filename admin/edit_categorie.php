<?php
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        img {
            width: 205px;
            height: 150px;
            margin-bottom: 10px;
            box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075)!important;
            border: 6px solid #f7f7f7;
        }
    </style>
    <?php include_once("header.php"); ?>
    <title>Fitbox.tn - Modifier Catégorie</title>
</head>
<body id="page-top">
<div id="wrapper">
    <?php include_once("nav.php"); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Modification d'une Catégorie</h1>
        </div>
        <!-- Show Category data -->
        <div class="container-fluid">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Catégories</h6>
                </div>
                <form action="categorie_ed.php" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <?php
                        if (isset($_POST['modif_btn'])) {
                            $id = $_POST['modif_id'];
                            $sql = "SELECT * FROM categorie WHERE id_cat='$id' ";
                            $query_run = mysqli_query($con, $sql);
                            foreach ($query_run as $row) {
                                ?>
                                <div class="form-group">
                                    <label for="id_categorie">ID de Categorie</label>
                                    <input type="text" class="form-control" name="id_categorie" value="<?php echo $row['id_cat']; ?>"
                                           readonly>
                                    <label for="edit_categorie">Nom de Categorie</label>
                                    <input type="text" class="form-control" name="edit_categorie"
                                           value="<?php echo $row['nom_cat']; ?>" placeholder="Nom de categorie">
                                    <label for="edit_descrcat">Description de Categorie</label>
                                    <input type="text" class="form-control" name="edit_descrcat"
                                           value="<?php echo $row['descrip_cat']; ?>" placeholder="Description de la catégorie">
                                    <label for="fileup">Image catégorie</label>
                                    <div class="img">
                                        <img src="<?php echo $row['image_cat']; ?>"/>
                                    </div>
                                    <label for="fileup">Modifier image de Categorie</label>
                                    <input type="file" class="form-control" id="fileup" name="fileup">
                                </div>
                            <?php
                            }
                        }
                        ?>
                    </div>
                    <div class="modal-footer">
                        <a href="categorie.php" class="btn btn-danger"> Annuler </a>
                        <button type="submit" name="modifbtncat" class="btn btn-primary"> Modifier </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<?php include_once("footer.php"); ?>
</html>
