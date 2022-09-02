<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DKShoes - Boutique</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/base.css">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <main class="container my-4">
        <h1 class="text-center">Categorie</h1>
        <section>
            <h2>Derniers Ajouts</h2>
            <div class="row">
                <?php foreach ($products as $product) { ?>
                <article class="col-12 col-md-6 col-xl-3 mb-3">
                    <figure>
                        <div>
                            <img class="w-100" src="<?php echo "/" . $product['image']; ?>" alt="<?= $product['name'] ?>">
                        </div>
                        <figcaption class="px-3 py-2">
                            <h3 class="h5"><?= $product['name'] ?></h3>
                            <p class="m-0"><?php echo $product['price'] ?></p>
                        </figcaption>
                    </figure>
                </article>
                <?php } ?>
            </div>
        </section>
    </main>
    <?php include 'includes/footer.php'; ?>

    <!-- Bootstrap. -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>