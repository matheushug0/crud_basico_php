<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <style>
        nav {
            justify-content: end;
        }
        nav a {
            margin: 30px 0;
        }
    </style>
    <title>SCRUD Project - Lista de Produtos</title>
</head>
<body>
  <!-- header - menu, nav .. -->
  <header class="container">
        <nav>
            <a href="./index.html" class="btn btn-primary btn-lg"><i class="bi bi-arrow-left-circle"></i> Voltar</a>
        </nav>
</header>

<!-- main -->
    <main>
        <section>
            <div class="container">
                <h2>Lista de Produtos</h2>

                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Número do Produto</th>
                        <th scope="col">Nome do Produto</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Fornecedor</th>
                        <th class="row-btns"scope="col">Ações</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php 
                            include 'sql_connect.php';
                            $sql = 'SELECT * FROM `stock`';
                            $search = mysqli_query($connect, $sql);
                            
                            while ($array = mysqli_fetch_array($search)) {

                              $idstock = $array['id_stock'];
                              $numberproduct = $array['numberp'];
                              $nameproduct = $array['namep'];
                              $quantityproduct = $array['quantityp'];
                              $categoryproduct = $array['categoryp'];
                              $sellerproduct = $array['sellerp'];
                        ?>
                      <tr>
                        <th><?php echo $numberproduct ?></th>
                        <td><?php echo $nameproduct ?></td>
                        <td><?php echo $quantityproduct ?></td>
                        <td><?php echo $categoryproduct ?></td>
                        <td><?php echo $sellerproduct ?></td>
                        <td class="row-btns">
                          <a href="edit_product.php?id=<?php echo $idstock ?>" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i> Editar</a>
                          <a href="delete_product.php?id=<?php echo $idstock ?>" class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i> Excluir</a>
                        </td>
                        <?php } ?>
                      </tr>
                    </tbody>
                  </table>

            </div>
        </section>
    </main>

    <!-- Bootstrap CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="./scripts.js"></script>
</body>
</html>