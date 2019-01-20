<?php
/*
Template Name: Blogg
*/
get_header();
?>
<section class="blogg-sec">
  <main role="main">
    <div class="container">
      <div class="bg-title"><span>blog</span></div>

      <div class="card blogg-card">
          <!--div class="blogg-thumbnail">
              <img src="<?php echo get_template_directory_uri(); ?>/images/food.jpg" alt="" class="blogg-left">
          </div>

          <div class="blogg-right">

          </div-->
          <div class="row">
            <div class="col-md-6">
              <div class="blogg-thumbnail">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/food.jpg" alt="" class="blogg-left">
              </div>
              <div class="blogg-date">
                  <h6>21 January</h6>
              </div>
            </div>
            <div class="col-md-6">
              <h1>A Blog Post Title</h1>
              <div class="blogg-author">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/Paradiset Logo Transparent SMALL.png" alt="" width='100'>
                  <h2>Paradiset</h2>
              </div>
              <div class="blogg-seperator"></div>
              <p>Green juice poke church-key banjo, thundercats af PBR&B hammock VHS yuccie irony taxidermy. Squid viral
                  fanny pack knausgaard polaroid.
                  <br>
                  Roof party subway tile health goth next level sriracha. Banh mi bespoke tilde DIY pok pok. Keffiyeh
                  wolf everyday carry, four dollar toast beard trust fund banh mi brunch hammock church-key chillwave +1
                  mumblecore. Vexillologist messenger bag kitsch mlkshk quinoa slow-carb vegan shabby chic flexitarian
                  chicharrones hella. 3 wolf moon edison bulb pork belly craft beer you probably haven't heard of them.</p>
              <a href="#" class="btn blogg-btn">
                  Läsa mer
              </a>
            </div>
          </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer();  ?>
