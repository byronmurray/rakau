<section id="reviews" class="reviews gutter">

  <h3 data-position="left" data-offset="160" class="notViewed animBlock title__tag text-center">What our clients are saying</h3>
  <h2 data-position="right" data-offset="160" class="notViewed animBlock title__main text-center">Testimonials</h2>
  <?php get_template_part( 'includes/divider' ) ?>

  <?php $args = array(
         'post_type' => 'reviews',
         'posts_per_page' => -1
       );
  $reviews = new WP_Query($args);

    if($reviews->have_posts()): $count = $reviews->found_posts; ?>

      <div class="reviews__slider">
      <?php while($reviews->have_posts()): $reviews->the_post(); ?>
        <div class="reviews__item">

          <h3><?php the_title() ?></h3>
          <a href="#"><?php the_field('link') ?></a>

          <div class="date">
            <?php echo get_the_date() ?>
          </div>

          <div class="rating">

            <?php for ($i=0; $i < get_field('rating') ; $i++) { ?>
              <i class="fa fa-star"></i>
            <?php } ?>

          </div>



          <div class="reviews__content"><?php the_content() ?></div>



        </div>
      <?php endwhile; ?>

    </div> <!-- /feature-reviews -->

    <?php endif;  wp_reset_postdata(); ?>





    <!-- move this to extenal file -->
    <script type="text/javascript">
       jQuery(document).ready(function(){
         jQuery('.reviews__slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            // fade: true,
            // speed: 1000,
            autoplay: true,
            pauseOnHover: false,
            pauseOnFocus: false,
            autoplaySpeed: 6000,
         });
       });
     </script>

</section>
