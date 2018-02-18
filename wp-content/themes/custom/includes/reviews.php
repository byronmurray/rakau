<section class="reviews gutter">
  <h2 class="title__main text-center">What our clients are saying</h2>
  <?php $args = array(
         'post_type' => 'post',
         'posts_per_page' => -1
       );
  $reviews = new WP_Query($args);

    if($reviews->have_posts()): $count = $reviews->found_posts; ?>

      <div class="reviews__slider">
      <?php while($reviews->have_posts()): $reviews->the_post(); ?>
        <div class="reviews__item">

          <h3>Tony Y. - Director/Founder</h3>
          <a href="#">Link to clients webpage/fb</a>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

          <div class="date">
            December 2017
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
            slidesToScroll: 1,
            arrows: false,
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
