<?php
/*
Template Name: Lectures
*/
get_header();
?>
    <main role="main">
        <div class="container">
            <h1 class='text-center text-light'>Föreläsningar</h1>
            <img src="./images/JC oktober.jpg" alt="" class="om-img">

            <!-- <div class="card card-om"> -->
                <div class="card-body bg-light">
                    <h5 class="card-title display-6">Om Johannes</h5>
                    <!--p class="card-text"></p-->
                    <div clasS="card-text">
                      <?php the_field('lecture-text'); ?>
                      <?php  ?>
                    </div>
                </div>
            <!-- </div> -->
        </div>
    </main>
<?php get_footer();  ?>
