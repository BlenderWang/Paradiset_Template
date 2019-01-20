<?php
/*
Template Name: Om Johannes
*/
get_header();
?>
    <main role="main">
        <div class="container">
            <h1 class='text-center text-light'>Om Johannes</h1>
            <?php
              $image = get_field('about-image');
              if( !empty($image) ): ?>
              	<img class="om-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
            <?php endif; ?>
            <div class="card card-om">
                <div class="card-body bg-light card-om-inner">
                    <h5 class="card-title display-6">Om Johannes</h5>
                    <div class="card-text">
                      <?php the_field('about-text'); ?>
                    </div>
                  </div>
          </div>
        </div>
    </main>
    <?php
    get_footer();
