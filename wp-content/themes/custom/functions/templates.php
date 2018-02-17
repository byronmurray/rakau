<?php 

function add_custom_box() {
    global $post;
    if(!empty($post)) {
        $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);

        if($pageTemplate == 'page-columns.php' ) {
            add_meta_box(WYSIWYG_META_BOX_ID, __('Custom WYSIWYG Meta Box', 'wysiwyg') , 'custom_wysiwyg', 'page');
        }
    }
}

add_action( 'add_meta_boxes', 'add_custom_box' );
 
function custom_wysiwyg($post) {
	echo "<h3>Add Here Your Content:</h3>";
	$content = get_post_meta($post->ID, 'custom_wysiwyg', true);
	wp_editor(htmlspecialchars_decode($content) , 'custom_wysiwyg', array(
	 "media_buttons" => true
	));
}
 
function custom_wysiwyg_save_postdata($post_id)
 {
 if (!empty($_POST['custom_wysiwyg']))
 {
	 $data = $_POST['custom_wysiwyg'];
	 update_post_meta($post_id, 'custom_wysiwyg', $data);
 }
 }
 
add_action('save_post', 'custom_wysiwyg_save_postdata');