<?php
/**
 * The main template file
 */

get_header();
?>
<?php if ( is_home() && ! is_front_page() ) : ?>
		    <section>
        <h1>Jag Är Paradiset</h1>
        <p>Här får du träffa de ledande forskarna, entreprenörerna, atleterna och influencers inom hälsa och
            hållbarhet som ger dig verktyg, tips och inspiration att utveckla din egen hälsa på ett hållbart
            sätt. Oavsett om det handlar om att prestera bättre, bli frisk eller att undvika sjukdom</p>
        <div class="video-container">
            <video autoplay loop muted plays-inline>
                <source src='<?php echo get_template_directory_uri(); ?>/media/JC_hemsida3_crop.mp4' type='video/mp4'>
            </video>
        </div>
    </section>
<?php else : ?>

<?php endif; ?>
<main role="main">
        <section class="vidsec">
            <div class="jumbotron bg-color">
                <video id="video-background" autoplay loop muted plays-inline>
                    <source src='<?php echo get_template_directory_uri(); ?>/media/JC_hemsida3_crop.mp4' type='video/mp4'>
                </video>
                <div class="container">
                    <h1 class="jumbotron-heading">Jag Är Paradiset</h1>
                    <p class="lead">Här får du träffa de ledande forskarna, entreprenörerna, atleterna och
                        influencers inom hälsa och
                        hållbarhet som ger dig verktyg, tips och inspiration att utveckla din egen hälsa på ett
                        hållbart
                        sätt. Oavsett om det handlar om att prestera bättre, bli frisk eller att undvika sjukdom</p>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card-outer">
                                <img class="pcard" src="<?php echo get_template_directory_uri(); ?>/images/top1.webp">
                                <div class="card-inner">
                                    <div>
                                        <h6>
                                            <a href="#">Om Johannes</a>
                                        </h6>
                                    </div>
                                    <div>
                                        <p>
                                            <a href="#" class='card-inner-txt'>
                                                <span>
                                                    Johannes historia
                                                </span>
                                            </a>
                                        </p>
                                    </div>
                                    <div>
                                        <i class="fas fa-minus"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">

                            <div class="card-outer">
                                <img class="pcard" src="<?php echo get_template_directory_uri(); ?>/images/top2.webp">

                            </div>
                            <div class="card-inner">
                                <div>
                                    <h6>
                                        <a href="#">Föreläsningar</a>
                                    </h6>
                                </div>
                                <div>
                                    <p>
                                        <a href="#" class='card-inner-txt'>
                                            <span>
                                                Ett urval av föreläsningar
                                            </span>
                                        </a>
                                    </p>
                                </div>
                                <div>
                                    <i class="fas fa-minus"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">

                            <div>
                                <img class="pcard" src="<?php echo get_template_directory_uri(); ?>/images/top3.webp">
                                <div class="card-inner">
                                    <div>
                                        <h6>
                                            <a href="#">Podcast</a>
                                        </h6>
                                    </div>
                                    <div>
                                        <p>
                                            <a href="#" class='card-inner-txt'>
                                                <span>
                                                    Lyssna på Johannes Podcast
                                                </span>
                                            </a>
                                        </p>
                                    </div>
                                    <div>
                                        <i class="fas fa-minus"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="promo-sec">
            <div class="container">
                <div class="row">

                </div>
            </div>
        </section>
        <section id="upcoming-sec">
            <h2>Kommande Föreläsningar</h2>
            <div class="container">
                <div class="row">
                    <div class="card upcoming-sec-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/JC_Press_högupplöst.jpeg" class="card-img-top card-1" alt="...">
                        <div class="card-body">
                            <p class="card-text">Lorem Ipsem</p>
                        </div>
                    </div>
                    <div class="card upcoming-sec-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/JC_Press_högupplöst.jpeg" class="card-img-top card-2" alt="...">
                        <div class="card-body">
                            <p class="card-text">Lorem Ipsem</p>
                        </div>
                    </div>
                    <div class="card upcoming-sec-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/JC_Press_högupplöst.jpeg" class="card-img-top card-3" alt="...">
                        <div class="card-body">
                            <p class="card-text">Lorem Ipsem</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="overlay-sec">
            <h2 id='headingClr'>Blog Posts</h2>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="card col-md-3">
                        <a href="#" target='_blank'>
                            <div class="overlay-card"></div>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/top1.webp" class="card-img-top card-1" alt="...">
                            <div class="card-img-overlay">
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni,
                                    tenetur qui cumque
                                    exercitationem at quos ipsum quae illo assumenda quod fugit dolor, ipsam suscipit quasi
                                    nostrum maxime,
                                    officiis eaque laudantium?</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 hours ago</small></p>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Lorem Ipsem</p>
                            </div>
                        </a>
                    </div>

                    <div class="card col-md-3">
                        <a href="#" target='_blank'>
                            <div class="overlay-card"></div>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/top2.webp" class="card-img-top card-2" alt="...">
                            <div class="card-img-overlay">
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni,
                                    tenetur qui cumque
                                    exercitationem at quos ipsum quae illo assumenda quod fugit dolor, ipsam suscipit quasi
                                    nostrum maxime,
                                    officiis eaque laudantium?</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 hours ago</small></p>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Lorem Ipsem</p>
                            </div>
                        </a>
                    </div>

                    <div class="card col-md-3">
                        <a href="#" target='_blank'>
                            <div class="overlay-card"></div>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/top3.webp" class="card-img-top card-3" alt="...">
                            <div class="card-img-overlay">
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni,
                                    tenetur qui cumque
                                    exercitationem at quos ipsum quae illo assumenda quod fugit dolor, ipsam suscipit quasi
                                    nostrum maxime,
                                    officiis eaque laudantium?</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 hours ago</small></p>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Lorem Ipsem</p>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </section>

        <div id="img-carousel">
            <h2>Bilder</h2>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/JC press Dan Sjunnesson.jpg" class="d-block w-100" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/top2.webp" class="d-block w-100" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/top3.webp" class="d-block w-100" alt="">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

    </main>
<?php
get_footer();
