<section id="services" class="services">

  <h3 class="title__tag text-center">No tree too big or too small leave it to us</h3>
  <h2 class="title__main text-center">Our Services</h2>
  <?php get_template_part( 'includes/divider' ) ?>

  <div class="services__navbar">

  </div>
  <?php $args = array(
         'post_type' => 'services',
         'posts_per_page' => -1
       );
  $services = new WP_Query($args);

    if($services->have_posts()): $count = $services->found_posts; ?>

      <div class="slider">
      <?php while($services->have_posts()): $services->the_post(); ?>
        <div class="services__item" data-title="<?php the_title() ?>">

          <div class="services__image" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>)">

          </div>

          <div class="services__content">
            <div class="services__content-wrap">
              <h2 class="title__main-small"><?php the_title() ?></h2>
              <p><?php echo  get_excerpt(400, 'content') ?></p>
              <div class="services__link">
                <a class="button__secondary" href="#">Contact Us</a>
              </div>
            </div>
          </div>


        </div>
      <?php endwhile; ?>

    </div> <!-- /feature-services -->

    <?php endif;  wp_reset_postdata(); ?>





<!-- move this to extenal file -->
<script type="text/javascript">
jQuery(document).ready(function(){

  jQuery(".slider").slick({
      dots: true,
      autoplay: false,
      slidesToShow: 1,
      slidesToScroll: 1,
      speed: 500,
      fade: true,
      cssEase: 'linear',
      customPaging : function(slider, i) {
          var title = jQuery(slider.$slides[i]).data('title');
          return '<a class="services__navbar__item"> '+title+' </a>';
      },

  });

});
</script>

</section>
