<section class="services section">
  <div class="services__navbar">
    <ul>
      <li><a href="#">service 1</a></li>
      <li><a href="#">service 2</a></li>
      <li><a href="#">service 3</a></li>
      <li><a href="#">service 4</a></li>
      <li><a href="#">service 5</a></li>
    </ul>
  </div>
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
              <h2 class="title__main-white"><?php the_title() ?></h2>
              <p><?php echo get_the_content() ?></p>
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
