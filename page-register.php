<?php
/*
 * Template Name: register
 */
get_header();
?>
<main class="container-fluid p-5">
<div class="row justify-content-around align-items-center">
    <div class="col-md-6 col-sm-9">
        <h1 class="font-weight-light text-center">Register now to have an access to the limited edition and Top quality Vehicles</h1>
    </div>
</div>
<div class="row justify-content-around">
    <section class="banner col-md-6 col-sm-8 m-0">
        <img class="img-thumbnail my-5" src="<?php bloginfo('template_url'); ?>/img/banner.jpeg" alt="road">
        <blockquote>
            <p>&quot;The connection to place, to the land, the wind, the sun, stars, the moon... it sounds romantic, but it's true - the visceral experience of motion, of moving through time on some amazing machine - a few cars touch on it, but not too many compared to motorcycles. I always felt that any motorcycle journey was special.&quot;</p>
            <footer class="text-right font-weight-light p-1">Antoine Predock<cite>- BrainyQuotes</cite></footer>
        </blockquote>
    </section>
    <section class="form border my-5 rounded py-4 col-md-3 col-sm-8 mx-0">
            <h1 class="text-center text-em-2">Sign Up</h1>
            <form class="text-center">
                <section>
                        <h2 class="text-em-1">Personal Information:</h2>
                        <input class="form-control my-2" type="text" placeholder="First Name" required>
                        <input class="form-control my-2" type="text" placeholder="Last Name" required>
                        <div class="d-flex justify-content-around">
                            <label for="male">
                                <input class="form-check-input my-2" type="radio" name="gender" id="male">
                                Male
                            </label>
                            <labe for="female">
                                <input class="form-check-input my-2" type="radio" name="gender"  id="female">
                                Female
                            </label>
                        </div>
                        <input class="form-control my-2" type="text" placeholder="Permanent address" required>
                        <input class="form-control my-2" type="email" placeholder="Email" required>
                        <input class="form-control my-2"  type="text" placeholder="Contact Number" required>
                        <input class="form-control my-2"  type="password" placeholder="Password" required>
                        <input class="form-control my-2" type="password" placeholder="Repeat password" required>
                </section>
                <section>
                        <h2 class="text-em-1">Payment Method</h2>
                        <label for="card">
                            Card type:
                        </label>
                        <select  id="card" name="usercard">
                            <option value="visa">Visa</option>
                            <option value="mc">Mastercard</option>
                            <option value="amex">American Express</option>
                        </select>
                        <input class="form-control my-2" type="text" placeholder="Card Number">
                        <input class="form-control my-2" type="text" placeholder="Expiration Date(mm/yy)">
                </section>
                <input class="submit my-2 btn btn-primary w-50 mx-auto" type="submit" value="Register">
                <p>Registered? <a href="<?php echo home_url(); ?>/?page_id=20">Login</a></p>
            </form>
        </section>
</div>
</main>
<?php get_footer(); ?>