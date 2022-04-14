<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <style>
        .container {
            margin: 60px auto;
            text-align: center;
        }
    </style>
    <title>SCRUD - Adicionar Produto</title>
</head>
<body>
  
<?php
include 'sql_connect.php';
/* 
    Recebe o valor do atributo <input> e guarda numa variável php 
*/
$numberp = $_POST["number_product"];
$namep = $_POST["name_product"];
$quantityp = $_POST["quantity_product"];
$categoryp = $_POST["category_product"];
$sellerp = $_POST["seller_product"];

$sql = "INSERT INTO `stock`(`numberp`, `namep`, `quantityp`, `categoryp`, `sellerp`) VALUES ($numberp,'$namep',$quantityp,'$categoryp','$sellerp')";

$insert = mysqli_query($connect, $sql);
?>

<div class="container">
<h2>Produto adicionado com sucesso <i class="bi bi-check-circle-fill"></i></h2>
<a href="./products_list.php" class="btn btn-warning btn-lg"><i class="bi bi-arrow-left-circle"></i> Voltar</a>
</div>


<!-- Script Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="./scripts.js"></script>
</body>
</html>