<?php

/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
    return '';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );


/**
 * Filter the except length.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 18;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


function get_excerpt($limit, $source = null){
    if($source == "content" ? ($excerpt = get_the_content()) : ($excerpt = get_the_excerpt()));

      if (strlen($excerpt) > $limit) {
        $excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
        $excerpt = strip_shortcodes($excerpt);
        $excerpt = strip_tags($excerpt);
        $excerpt = substr($excerpt, 0, $limit);
        $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
        $excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
        $excerpt = $excerpt.'...';
      }
    
    return $excerpt;
}


/**
 * Filter the blog title length
 *
 * @param string $title Blog title.
 * @return string (Maybe) modified title length.
 */
function blog_title( $title ) {
	$max = 50;

	if( strlen( $title ) > $max ) {
		return substr( $title, 0, $max ). " &hellip;";
	} else {
		return $title;
	}
}


/**
 * numbered pagination
 *
 * @param int $pages num of pages.
 * @param int $range
 */
// numbered pagination
function pagination($pages = '', $range = 4)
{
	$showitems = ($range * 2)+1;

	global $paged;
	if(empty($paged)) $paged = 1;

	if($pages == '') {

		global $wp_query;

		$pages = $wp_query->max_num_pages;

		if(!$pages) {
			$pages = 1;
		}
	}

    if(1 != $pages) {
        echo "<nav class='pagination-nav'>";
        echo "<ul class='pagination'>";

            if($paged == 1) {
             	echo '<li class="page-item disabled">';
			} else {
				echo '<li class="page-item">';
			}

            echo '<a class="page-link" href='.get_pagenum_link($paged - 1).' tabindex="-1">Previous</a>';
    		echo '</li>';

			for ($i=1; $i <= $pages; $i++){
				if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
					if ($paged == $i) {
						echo '<li class="page-item active">';
					} else {
						echo '<li class="page-item">';
					}
					echo '<a class="page-link" href='.get_pagenum_link($i).'>'.$i.'</a></li>';
				}
			}

			if ($paged < $pages ) {
				echo '<li class="page-item">';
			} else {
				echo '<li class="page-item disabled">';
			}

			echo '<a class="page-link" href='.get_pagenum_link($paged + 1).' tabindex="-1">Next</a>';
			echo '</li>';

        echo "</ul>";
        echo "</nav>";
    }
}
