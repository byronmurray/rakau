<section id="reviews" class="reviews gutter">

  <h3 class="title__tag text-center">What our clients are saying</h3>
  <h2 class="title__main text-center">Testimonials</h2>
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



          <p><?php the_content() ?></p>



        </div>
      <?php endwhile; ?>

    </div> <!-- /feature-reviews -->

    <?php endif;  wp_reset_postdata(); ?>





    <!-- move this to extenal file -->
    <script type="text/javascript">
       jQuery(document).ready(function(){
         jQuery('.reviews__slider').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 4000,
            responsive: [
               {
                   breakpoint: 980, // tablet breakpoint
                   settings: {
                       autoplaySpeed: 3000,
                       slidesToShow: 2,
                       slidesToScroll: 2
                   }
               },
               {
                   breakpoint: 480, // mobile breakpoint
                   settings: {
                       autoplaySpeed: 3000,
                       slidesToShow: 1,
                       slidesToScroll: 1
                   }
               }
           ]
         });
       });
     </script>

</section>
