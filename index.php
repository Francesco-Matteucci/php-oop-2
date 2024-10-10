<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce per Animali</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-5">I nostri prodotti</h1>
        <div class="row">
            <?php
            require_once __DIR__ . '/db/db.php';

            foreach ($products as $product) { ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100 mb-4 p-4">
                    <img src="<?= $product->image; ?>" class="card-img-top" alt="<?= $product->name; ?>">
                    <div class="card-body">
                        <p class="card-text"><i class="<?= $product->category->icon; ?>"></i></p>
                        <h5 class="card-title"><?= $product->name; ?></h5>
                        <p class="card-text"><?= $product->getDetails(); ?></p>
                        <p class="card-text"><strong>Prezzo: €<?= $product->price; ?></strong></p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>