<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Email valide per il login
    $validEmails = [
        "riccardo@boolean.com",
        "marco@boolean.com",
        "luca@boolean.com",
        "mauro@boolean.com"
    ];

    // password valida per il login
    $validPassword = "password123";

    if (in_array($email, $validEmails) && $password === $validPassword) {
        $_SESSION['isLoggedIn'] = true;
        $_SESSION['email'] = $email;
        header('Location: index.php');
    } else {
        $error = "Email o password non validi";
    }
}
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce per Animali - Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Login</h1>

        <p>In via del tutto eccezionale, questa volta vi fornirò i dati di accesso :)</p>
        <small><strong>Le Email:</strong> riccardo@boolean.com <br> marco@boolean.com <br> luca@boolean.com <br>
            mauro@boolean.com <br>
            <strong>Password: </strong>password123</small>

        <?php if (isset($error)) { ?>
        <div class="alert alert-danger" role="alert">
            <?= $error ?>
        </div>
        <?php } ?>

        <form method="POST" action="login.php">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Accedi</button>
        </form>
    </div>
</body>

</html>