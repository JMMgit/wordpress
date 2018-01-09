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
<header class="box-shadow bg-light">
    <div class="container">
        <div class="row">
            <nav class="col navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand font-weight-bold text-water" href="<?php echo home_url(); ?>"> GOODTALK</a>
                <button class="border-0 box-shadow navbar-toggler align-self-end my-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="fas fa-bars text-water font-em-1_5"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item px-3"><a class="nav-link text-water" href="<?php echo home_url(); ?>/">Home</a></li>
                        <li class="nav-item px-3"><a class="nav-link text-water" href="<?php echo home_url(); ?>/teachers">Teachers</a></li>
                        <li class="nav-item px-3"><a class="nav-link text-water" href="<?php echo home_url(); ?>/about">About Us</a></li>
                        <li class="nav-item px-3"><a class="nav-link text-water" href="<?php echo home_url(); ?>/faq">FAQ</a></li>
                        <li class="nav-item px-3"><a class="nav-link text-water" href="<?php echo home_url(); ?>/contact">Contact</a></li>
                        <li class="nav-item pl-3"><a class="nav-link text-water pr-0" href="<?php echo home_url(); ?>/login">Login</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>