<form action="" method="post" enctype="multipart/form-data">

<div class="champ">
    <label for="pseudo">Nom de Produit : </label>
    <input type="text" class="form-control" id="name" name="name" required><br/>
  </div>

  <div class="champ">
    <label for="pseudo">price de Produit : </label>
    <input type="text" class="form-control" id="price" name="price" step="0.001" required><br/>
  </div>

  <div class="champ">
    <label for="pseudo">categorie  de Produit : </label>
    <select name="categorie" id="categorie">
    <option value="stylo">stylo</option>
    <option value="ardoise">ardoise</option>
    <option value="colle">colle</option>
    <option value="taille">taille-crayon</option>
    </select>
  </div>


  <div class="champ">
    <label for="pseudo">Image Upload : </label>
    <input type="file" name="file">
  </div>


  <input class="btn btn-primary ml-xl-4" type="submit" value="Upload Image">
</form>
<?php

if( $_POST['name'] &&  $_POST['name'] &&  $_POST['price'])
{
    $categorie = $_POST['categorie'];

    $name = $_POST['name'];
    
    $price = $_POST['price'];

$file = $_FILES['file'];
$fileName = $file['name'];
$fileTmpName = $file['tmp_name'];


// Connect to the database
$db = mysqli_connect('localhost', 'root', '', 'prodisp');

// Insert the data into the database
$sql = "INSERT INTO `tbl_product`( `name`, `data`, `price`, `categorie` )VALUES ('$name','$fileName', '$price','$categorie' )";
$stmt = mysqli_prepare($db, $sql);
mysqli_stmt_bind_param($stmt, "sb", $fileName, $fileData,$price , $categorie);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);

// Move the file to a permanent location
move_uploaded_file($fileTmpName, 'images/'.$fileName);
}


?>