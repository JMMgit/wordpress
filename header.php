<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
    <link rel="icon" type="image/png" href="../crs/img/logo.png">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand font-weight-bold" href="index.html"> <img class="logo rounded" src="../crs/img/logo.png" alt=""> RentAcar</a>
        <button class="navbar-toggler align-self-end" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
                <li nav-item><a class="nav-link" href="#">Cars</a></li>
                <li nav-item><a class="nav-link" href="#">About Us</a></li>
                <li nav-item><a class="nav-link" href="#">FAQ</a></li>
                <li nav-item><a class="nav-link" href="#">Contact</a></li>
                <li nav-item><a class="nav-link" href="#">Login</a></li>
            </ul>
        </div>
    </nav>
</header>