<?php
/*
 * Template Name: login
 */
get_header();
?>
<main class="container-fluid p-5">
<div class="row justify-content-around align-items-center">
    <div class="col-md-6 col-sm-9">
        <h1 class="font-weight-light text-center">One Stop Access to Limited edition and top Quality Vehicles</h1>
    </div>
</div>
<div class="row justify-content-around">
    <section class="form border my-4 rounded py-4 col-md-4 col-sm-8 mx-0">
            <h1 class="text-center text-em-2">Sign in</h1>
            <form class="text-center">
                <section class="px-3">
                        <h2 class="text-em-1">Credentials</h2>
                        <input class="form-control my-4" type="email" placeholder="Email" required>
                        <input class="form-control my-2"  type="password" placeholder="Password" required>
                </section>
                <input class="submit my-2 btn btn-primary w-50 mx-auto" type="submit" value="Login">
                <p>Not Registered? <a href="<?php echo home_url(); ?>/?page_id=24">Register</a></p>
                <section class="px-3">
                        <h2 class="text-em-1">OR</h2>
                        <a class="submit my-2 btn btn-outline-info w-50 mx-auto" >Google+</a>
                        <a class="submit my-2 btn btn-outline-info w-50 mx-auto" >Facebook</a>
                </section>
            </form>
        </section>
</div>
</main>
<?php get_footer(); ?>