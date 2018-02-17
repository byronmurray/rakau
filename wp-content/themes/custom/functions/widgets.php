<?php 

function create_widget( $name, $id, $description ) {

	register_sidebar(array(
		'name' => __( $name ),	 
		'id' => $id, 
		'description' => __( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));

}

create_widget( 'Page Sidebar', 'page', 'Displays on the side of pages with a sidebar' );
create_widget( 'Blog Sidebar', 'blog', 'Displays on the side of pages in the blog section' );

create_widget( 'Shop Sidebar', 'shop', 'Displays on the side of the shop pages' );

create_widget( 'Footer Left' , 'foot-left' , 'Displays on left of the Footer');
create_widget( 'Footer Center' , 'foot-center' , 'Displays on center of the Footer');
create_widget( 'Footer Right' , 'foot-right' , 'Displays on right of the Footer');

