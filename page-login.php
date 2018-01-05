<?php
/*
 * Template Name: login
 */
get_header();
?>
<main class="w-100 h-100 border bg-light">
<section class="container p-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-2 col-sm-5 mb-4">
            <img class="w-100 img-thumbnail" src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="">
            <h3 class="text-center mt-2">GoodTalk</h3>
        </div>
    </div>
    <div class="row justify-content-center">
        <section class="border rounded-left bg-white col-md-6 col-sm-12 d-flex flex-column align-items-center rounded text-center py-5">
            <form action="">
                    <input class="form-control my-2" type="text" placeholder="Full Name" required>
                    <input class="form-control my-2" type="email" placeholder="Email" required>
                    <input class="form-control my-2"  type="password" placeholder="Password" required>
                    <input class="form-control my-2" type="password" placeholder="Repeat password" required>
                    <label for="card d-inline-block">
                        Card type:
                    </label>
                    <select class="form-control w-50 d-inline"  id="card" name="usercard">
                        <option value="visa">Visa</option>
                        <option value="mc">Mastercard</option>
                        <option value="amex">American Express</option>
                    </select>
                    <input class="form-control my-2" type="text" placeholder="Card Number">
                    <input class="form-control my-2" type="text" placeholder="Expiration Date(mm/yy)">
            <input class="submit my-2 btn btn-primary w-50 mx-auto" type="submit" value="Register">
            </form>
        </section>
        <section class="border rounded-right bg-white col-md-4 col-sm-12 p-4 d-flex flex-column justify-content-center align-items-strech">
            <form action="">
                <input class="form-control my-3" type="email" placeholder="Email" required>
                <input class="form-control my-3"  type="password" placeholder="Password" required>
                <div class="form-check text-center">
                    <input type="checkbox" class="form-check-input" id="remember">
                    <label class="form-check-label pl-0" for="remember">Remember me</label>
                </div>
                <div class="d-flex align-items-center justify-content-around">
                    <a  href="#">Forgot Password?</a>
                    <input class="submit my-2 btn btn-primary border w-25" type="submit" value="Login">
                </div>
            </form>
        </section>
        </section>
    </div>
</section>
</main>
<?php get_footer(); ?>