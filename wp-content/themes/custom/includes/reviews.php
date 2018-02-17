<section class="reviews section">
  <?php $args = array(
         'post_type' => 'post',
         'posts_per_page' => -1
       );
  $reviews = new WP_Query($args);

    if($reviews->have_posts()): $count = $reviews->found_posts; ?>

      <div class="reviews__slider">
      <?php while($reviews->have_posts()): $reviews->the_post(); ?>
        <div class="reviews__item">

          <div class="reviews__image" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>)">

          </div>

          <div class="reviews__content">
            <div class="reviews__content-wrap">
              <?php the_title() ?>
              <p><?php echo get_the_content() ?></p>
              <a class="button__secondary" href="#">Contact Us</a>
            </div>
          </div>


        </div>
      <?php endwhile; ?>

    </div> <!-- /feature-reviews -->

    <?php endif;  wp_reset_postdata(); ?>





    <!-- move this to extenal file -->
    <script type="text/javascript">
      jQuery(document).ready(function(){
        jQuery('.reviews__slider').slick({
          slidesToShow: 4,
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
