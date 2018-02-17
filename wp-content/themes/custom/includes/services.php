<section class="services section">
  <?php $args = array(
         'post_type' => 'post',
         'posts_per_page' => 1
       );
  $services = new WP_Query($args);

    if($services->have_posts()): $count = $services->found_posts; ?>

      <div class="services__slider">
      <?php while($services->have_posts()): $services->the_post(); ?>
        <div class="services__item">

          <div class="services__image" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>)">

          </div>

          <div class="services__content">
            <div class="services__content-wrap">
              <?php the_title() ?>
              <p><?php echo get_the_content() ?></p>
              <a class="button__secondary" href="#">Contact Us</a>
            </div>
          </div>


        </div>
      <?php endwhile; ?>

    </div> <!-- /feature-services -->

    <?php endif;  wp_reset_postdata(); ?>





    <!-- move this to extenal file -->
    <script type="text/javascript">
      jQuery(document).ready(function(){
        jQuery('.services__slider').slick({
          slidesToShow: 1,
          fade: true,
          accessibility: true,
          arrows: true,
          speed: 2000,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 4000,
        });
      });
    </script>

</section>
