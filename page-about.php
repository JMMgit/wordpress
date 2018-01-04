<?php
/*
 * Template Name: about
 */
get_header();
?>
<main>
    <div class="about"></div>
    <h1 class="banner-custom font-weight-light text-center my-5">ABOUT US</h1>
    <div class="d-flex flex-column align-items-center">
        <div class="decor border border-dark text-center"></div>
           <blockquote class="para d-inline-block w-50 m-5 text-center">&quot;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo aliquam esse placeat maiores soluta quae reiciendis architecto ut eveniet inventore. Molestias, aspernatur quia. Quos cumque ab esse vero tempore sequi.&quot;</blockquote>
        <div class="decor border border-dark"></div>
    </div>

    <article class="container mt-5">
        <div class="row align-items-center my-4">
            <div class="col-md-6">
                <h2 class="font-weight-normal">Mission</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae commodi repudiandae perspiciatis exercitationem maiores laboriosam laborum ut? Consectetur, a, minima, rerum architecto natus accusantium adipisci doloribus repellat itaque quaerat enim sapiente similique illum vel reiciendis distinctio tenetur animi rem dolor aliquid asperiores. Veritatis exercitationem modi aspernatur nesciunt dicta qui porro.</p>                
          </div>
            <div class="col-md-6"><img class="w-100" src="<?php bloginfo('template_url'); ?>/img/mission.jpeg" alt="mission"></div>
        </div>
        <div class="row align-items-center my-4">
            <div class="col-md-6"><img class="w-100" src="<?php bloginfo('template_url'); ?>/img/company.jpeg" alt="mission"></div>
            <div class="col-md-6">
                <h2 class="font-weight-normal">The Company</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae commodi repudiandae perspiciatis exercitationem maiores laboriosam laborum ut? Consectetur, a, minima, rerum architecto natus accusantium adipisci doloribus repellat itaque quaerat enim sapiente similique illum vel reiciendis distinctio tenetur animi rem dolor aliquid asperiores. Veritatis exercitationem modi aspernatur nesciunt dicta qui porro.</p>                
            </div>
        </div>
        <div class="row align-items-center my-4 pb-5">
            <div class="col-md-6">
                <h2 class="font-weight-normal">Our Story</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae commodi repudiandae perspiciatis exercitationem maiores laboriosam laborum ut? Consectetur, a, minima, rerum architecto natus accusantium adipisci doloribus repellat itaque quaerat enim sapiente similique illum vel reiciendis distinctio tenetur animi rem dolor aliquid asperiores. Veritatis exercitationem modi aspernatur nesciunt dicta qui porro.</p>                
            </div>
            <div class="col-md-6"><img class="w-100" src="<?php bloginfo('template_url'); ?>/img/story.jpeg" alt="mission"></div>
        </div>
    </article>
</main>
<?php get_footer(); ?>