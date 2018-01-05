<?php
/*
 * Template Name: contact
 */
get_header();
?>
<main class="container border my-4">
<section class="row justify-content-around align-items-center  my-5">
        <article class="col-md-4 col-sm-12 col-xm-12">
            <form class="text-center">
                <h2 class="text-info mx-auto">Get in Touch</h2>
                <input class="form-control my-2" type="text" id="name" placeholder="Name">
                <input class="form-control my-2" type="email" id="email" placeholder="Email">
                <input class="form-control my-2" type="email" id="email" placeholder="Subject">
                <textarea class="form-control my-2" rows="5"  id="message" >Message</textarea>
                <button type="button" class="btn btn-lg btn-info w-50 ">Submit</button>
            </form>
        </article>
        <article class="col-md-3 col-sm-12 col-xm-12 m-1">
                <h3 class="text-info font-weight-normal">Connect with Us:</h3>
                <p>For Support and questions:<br>
                Email us at support@gstore.com<br>
                Tel: +(639) 495-827-482
                </p>
                <h3 class="font-weight-normal text-info">Cebu, Philippines</h3>
                <address>
                        Unit 607, Tower 1 Marco Polo Residences<br>
                        Nivel Hills, Lahug, Cebu City<br>
                        Cebu 6000. <br>
                        Philippines
                </address>
                <h3 class="font-weight-normal text-info">Davao del Norte, Philippines</h3>
                <adress>
                        'Purok 5<br>
                        Salvacion, Panabo City<br>
                        8105 Davao del Norte<br>
                        Philippines
                </adress>
        </article>
        <article class="col-md-3 col-sm-12 col-xm-12 m-1">
                <h3 class="font-weight-normal text-info">Pampanga, Philippines</h3>
                <address>
                        Unit 607, Tower 1 Marco Polo Residences<br>
                        Nivel Hills, Lahug, Pampanga City<br>
                        Pampanga 6000. <br>
                        Philippines
                </address>
                <h3 class="font-weight-normal text-info">Manila, Philippines</h3>
                <adress>
                        'Purok 5<br>
                        Salvacion, Panabo City<br>
                        8105 Manila City<br>
                        Philippines
                </adress>
        </article>
        <article class="col-md-12 col-sm-12 col-xm-12 mt-5">
            <img class="img-thumbnail" src="<?php bloginfo('template_url'); ?>/img/maps.jpg" alt="Company Map">
        </article>
</section>
</main>
<?php get_footer(); ?>