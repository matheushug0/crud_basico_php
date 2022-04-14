<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <style>
        #idp {
            display: none;
        }
        nav {
            justify-content: end;
        }
        nav a {
            margin: 30px 0;
        }
    </style>
    <title>SCRUD Project - Editar produto</title>
</head>
<body>

    <!-- Header = Title, Nav ... -->

  <header class="container">
        <nav>
            <a href="./products_list.php" class="btn btn-primary btn-lg"><i class="bi bi-arrow-left-circle"></i> Voltar</a>
        </nav>
</header>

    <!-- Main - Form, images ... -->
    <main>
    <form action="_update_product.php" method="post" class="container">
        <h2>Editar Produto</h2>

        <?php
        
        include 'sql_connect.php';

        $id = $_GET['id'];


        $sql = "SELECT * FROM `stock` WHERE id_stock = $id";
        $search = mysqli_query($connect, $sql);

        while ($array = mysqli_fetch_array($search)){

            $idstock = $array['id_stock'];
            $numberproduct = $array['numberp'];
            $nameproduct = $array['namep'];
            $quantityproduct = $array['quantityp'];
            $categoryproduct = $array['categoryp'];
            $sellerproduct = $array['sellerp'];

        ?>

    <div class="mb-3">
        <label for="product-number" class="form-label">Número do Produto</label>
        <input type="number" class="form-control" id="product-number" name="number_product" value="<?php echo $numberproduct?>" disabled>
        <input type="number" class="form-control" id="idp" name="id_product" value="<?php echo $id?>">
    </div>
    <div class="mb-3">
        <label for="product-name" class="form-label">Nome do Produto</label>
        <input type="text" class="form-control" id="product-name" name="name_product" value="<?php echo $nameproduct?>">
    </div>
    <div class="mb-3">
        <label for="product-quantity" class="form-label">Quantidade</label>
        <input type="number" class="form-control" id="product-quantity" name="quantity_product" value="<?php echo $quantityproduct?>">
    </div>
    <div class="mb-3">
        <label id="product-category" class="form-label">Categoria</label>
        <select id="product-category" class="form-select" name="category_product">
            <option >Periféricos</option>
            <option>Hardware</option>
            <option>Software</option>
            <option>Peças de reposição</option>
            <option>Smartphones</option>
        </select>
    </div>
    <div class="mb-3">
        <label id="product-seller" class="form-label">Fornecedor</label>
        <select id="product-seller" class="form-select" name="seller_product">
            <option>Fornecedor 1</option>
            <option>Fornecedor 2</option>
            <option>Fornecedor 3</option>
        </select>
    </div>

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button type="submit" class="btn btn-warning btn-lg">Atualizar Dados</button>
    </div>
    <?php } ?>
    </form>
    </main>

    <!-- Bootstrap CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="./scripts.js"></script>
</body>
</html>