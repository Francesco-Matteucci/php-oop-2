<?php
session_start();
$isLoggedIn = isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'];
?>

<header class="bg-light p-3">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">

            <a href="index.php" class="navbar-brand">
                <img src="img/logo.png" alt="Logo" style="max-height: 50px;">
            </a>

            <nav class="navbar navbar-expand-lg navbar-light">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-paw"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item" v-for="link in links" :key="link.text">
                            <a class="nav-link" :href="link.href">
                                <i v-if="link.icon" :class="`fa ${link.icon}`"></i> {{ link.text }}
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>