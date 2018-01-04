<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GoodTalk</title>
    <?php wp_head(); ?>
    <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/logo.png">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand font-weight-bold" href="<?php echo home_url(); ?>"> <img class="logo rounded" src="<?php bloginfo('template_url'); ?>/img/logo.png" alt=""> GoodTalk</a>
        <button class="navbar-toggler align-self-end" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active"><a class="nav-link" href="<?php echo home_url(); ?>/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo home_url(); ?>/?page_id=22">Teachers</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo home_url(); ?>/?page_id=13">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo home_url(); ?>/?page_id=18">FAQ</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo home_url(); ?>/?page_id=15">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo home_url(); ?>/?page_id=20">Login</a></li>
            </ul>
        </div>
    </nav>
</header>