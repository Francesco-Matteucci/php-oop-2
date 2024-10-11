<?php
session_start();

$isLoggedIn = isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'];

$discount = 0.20;

// Verifico se è stata inviata una votazione,  e mostro il messaggio
$ratingMessage = null;
if (isset($_SESSION['ratingMessage'])) {
    $ratingMessage = $_SESSION['ratingMessage'];

     // Rimuovo il messaggio dopo averlo mostrato
    unset($_SESSION['ratingMessage']);
}
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce per Animali - Home</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style/style.css">
</head>

<body>

    <div id="app">

        <?php
        require_once __DIR__ . '/components/header.php';
        ?>

        <div class="container main-content">
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
                            <p class="card-text">
                                <strong>Prezzo: €<?= number_format($product->price, 2); ?></strong>
                                <?php if ($isLoggedIn && method_exists($product, 'applyDiscount')) { ?>
                                <br>
                                <strong>Prezzo scontato:
                                    €<?= number_format($product->applyDiscount($product->price, $discount), 2); ?></strong>
                                <?php } ?>
                            </p>

                            <?php if ($ratingMessage && $ratingMessage['product_id'] == $product->id) { ?>
                            <div class="alert <?= $ratingMessage['success'] ? 'alert-success' : 'alert-danger'; ?>">
                                <?= $ratingMessage['message']; ?>
                            </div>
                            <?php } ?>

                            <form method="POST" action="rate_product.php">
                                <input type="hidden" name="product_id" value="<?= $product->id; ?>">
                                <label for="rating">Dai un voto (1-5):</label>
                                <input type="number" name="rating">
                                <button type="submit" class="btn btn-primary mt-2">Valuta</button>
                            </form>

                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <?php
        require_once __DIR__ . '/components/footer.php';
        ?>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Vue Script -->
    <script src="https://unpkg.com/vue@3"></script>
    <!-- Custom Script -->
    <script src="js/script.js"></script>
</body>

</html>