<?php
/*
Plugin Name: Dance Tutors
Plugin URI: 
Description: Плагин, создающий пост-тайп преподавательского состава для сайта Dance
Author: FF-Group
Author URI: http://www.ffgroup.kharkov.com/
Version: 0.1
*/ 

/**
* Add shortcode for output tutors
**/

function tutors_output_shortcode(){
	$args = array(
			'post_type' => 'tutors',
			'post_status' => 'publish',
			'order' => 'ASC'
		);

	$query = new WP_Query($args);
	ob_start;
	if($query->have_posts()):
		while($query->have_posts()): $query->the_post();
			$id = get_the_ID();
			$post = get_post($id); 
			$post_meta = get_post_meta($id); 
			$tutor_photo_url = get_post_meta($id, 'wpcf-tutors-photo', true);
			?>
			<div class="tutors-list-page-wrapper">
				<div class="tutors-photo-wrapper">
					<img src="<?php echo $tutor_photo_url; ?>"> <br />
					<div class="tutors-name"><?php echo get_the_title($id); ?></div>
				</div>
				<div class="tutors-testimonial"><?php the_content(); ?></div>
			</div>
<?php
		endwhile;
	endif;
	$return = ob_get_clean();
	return $return;
}

add_shortcode('tutors_list', 'tutors_output_shortcode');


function add_style_css(){
	wp_enqueue_style('style', plugins_url('style.css', __FILE__));
}

add_action('wp_enqueue_scripts', 'add_style_css');