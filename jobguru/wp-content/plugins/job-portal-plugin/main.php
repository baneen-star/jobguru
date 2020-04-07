<?php
/*
Plugin Name: Job Portal
Version: 3.0.1
Author: Codegirls Student
*/




function job_portal() {

	$labels = array(
		'name' => __( 'Jobs', 'Post Type General Name', 'jobpost' ),
		'singular_name' => __( 'Jobs', 'Post Type Singular Name', 'jobpost' ),
		'menu_name' => __( 'Jobs', 'jobpost' ),
		'name_admin_bar' => __( 'Position', 'jobpost' ),
		'archives' => __( 'Position Archives', 'jobpost' ),
		'attributes' => __( 'Position Attributes', 'jobpost' ),
		'parent_item_colon' => __( 'Parent Position:', 'jobpost' ),
		'all_items' => __( 'All Jobs', 'jobpost' ),
		'add_new_item' => __( 'Add New Job', 'jobpost' ),
		'add_new' => __( 'Add New', 'jobpost' ),
		'new_item' => __( 'New Position', 'jobpost' ),
		'edit_item' => __( 'Edit Position', 'jobpost' ),
		'update_item' => __( 'Update Position', 'jobpost' ),
		'view_item' => __( 'View Position', 'jobpost' ),
		'view_items' => __( 'View Jobs', 'jobpost' ),
		'search_items' => __( 'Search Position', 'jobpost' ),
		'not_found' => __( 'Not found', 'jobpost' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'jobpost' ),
		'featured_image' => __( 'Featured Image', 'jobpost' ),
		'set_featured_image' => __( 'Set featured image', 'jobpost' ),
		'remove_featured_image' => __( 'Remove featured image', 'jobpost' ),
		'use_featured_image' => __( 'Use as featured image', 'jobpost' ),
		'insert_into_item' => __( 'Insert into Position', 'jobpost' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Position', 'jobpost' ),
		'items_list' => __( 'Jobs list', 'jobpost' ),
		'items_list_navigation' => __( 'Jobs list navigation', 'jobpost' ),
		'filter_items_list' => __( 'Filter Jobs list', 'jobpost' ),
	);
	$args = array(
		'label' => __( 'Jobs', 'jobpost' ),
		'description' => __( '', 'jobpost' ),
		'labels' => $labels,
		'menu_icon' => '',
		'supports' => array('title', 'editor','thumbnail', 'revisions' ),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
		'slug' => 'cpt_name',
        'menu_icon'  => 'dashicons-businessman',

	);
	register_post_type( 'jobs', $args );

}
add_action( 'init', 'job_portal', 0 );


// 



// Taxanomy = Job Types

add_action( 'init', 'jobs_type' );	
	
function jobs_type(){

$labels = array(
	'name'                       =>  'Job Types',
	'singular_name'              =>  'Job Type',
	'search_items'               =>  'Search Job Types',
	'popular_items'              =>  'Popular Job Types',
	'all_items'                  =>  'All Job Types',
	'parent_item'                => null,
	'parent_item_colon'          => null,
	'edit_item'                  =>  'Edit Job Type',
	'update_item'                =>  'Update Job Type',
	'add_new_item'               =>  'Add New Job Type',
	'new_item_name'              =>  'New Job Type Name',
	'separate_items_with_commas' =>  'Separate Job Types with commas',
	'add_or_remove_items'        =>  'Add or remove Job Types',
	'choose_from_most_used'      =>  'Choose from the most used Job Types',
	'not_found'                  =>  'No Job Types found.',
	'menu_name'                  =>  'Job Types',
);

$args = array(
	'hierarchical'          => true,
	'labels'                => $labels,
	'show_ui'               => true,
	'show_admin_column'     => true,
	'query_var'             => true,
	'rewrite'               => array( 'slug' => 'jobs-type' ),
);

register_taxonomy('jobs-type','jobs',$args);
}


// Taxonomy = Job Category

function job_type_category(){

    $labels = array(
        'name'              => 'Job Categories',
        'singular_name'     => 'Job Category',
        'search_items'      => 'Search Job Categories',
        'all_items'         => 'All Job Categories',
        'parent_item'       => 'Parent Job Category',
        'parent_item_colon' => 'Parent Job Category:',
        'edit_item'         => 'Edit Job Category',
        'update_item'       => 'Update Job Category',
        'add_new_item'      => 'Add New Job Category',
        'new_item_name'     => 'New Job Category Name',
        'menu_name'         => 'Job Categories',
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'job_category' ),
    );

    register_taxonomy( 'job_category', array( 'jobs' ), $args );
}

	add_action('init', 'job_type_category');
	

	
// Taxonomy = Job Salary

function job_type_salary(){

    $labels = array(
        'name'              => 'Job Salaries',
        'singular_name'     => 'Job Salary',
        'search_items'      => 'Search Job Salaries',
        'all_items'         => 'All Job Salaries',
        'parent_item'       => 'Parent Job Salary',
        'parent_item_colon' => 'Parent Job Salary:',
        'edit_item'         => 'Edit Job Salary',
        'update_item'       => 'Update Job Salary',
        'add_new_item'      => 'Add New Job Salary',
        'new_item_name'     => 'New Job Salary Name',
        'menu_name'         => 'Job Salaries',
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'job_salary' ),
    );

    register_taxonomy( 'job_salary', array( 'jobs' ), $args );
}

	add_action('init', 'job_type_salary');

// Tabs jobs
// <php 
// global $post;
// $terms = wp_get_post_terms($post->ID, 'portfolio_tags');
// if ($terms) {
//     $output = array();
//     foreach ($terms as $term) {
//         $output[] = '<a>slug .'" href="' .get_term_link( $term->slug, 'portfolio_tags') .'">' .$term->name .'</a>';
//     }
//     echo join( ', ', $output );
// }
// 


// Listing showing 

function all_jobs_function($atts){
$atts = shortcode_atts(
		array(
			'id' 		=> false,
		),
		$atts,
		'all_jobs_function'
	);

	$data = "";
	$args = new WP_Query(array(
		'post_type' => 'jobs',
		'posts_per_page' =>-1,
		'paged' => 1,
		'orderby' => 'date',
		'order'	=>	'DESC',
		'tax_query' => array(
			array(
				'taxonomy' => 'jobs-type',
				'field'    => 'id',
				'terms'    => $atts['id'],
			),
		),
	));
	if ($args->have_posts()) :
		$data .= '<div class="jobs jobs-home">';
		while ($args->have_posts()) : $args->the_post();
                $data .= "<div class='sliderinner'>"; 
                $data .=  "<div class='jobs_pra'>";
                $data .=  "<p>".get_the_content()."</p>";
                $data .=  "</div>";
                $data .=   "</div>"; 
		endwhile;
		$data .= '</div>';
		  $data .=  "<div class='jobs-buttons'>";
                $data .=  "<span class='slick-arrow left-btn slick-prev'></span>";
                $data .= '<div class="jobs jobs-home-img">';
                while ($args->have_posts()) : $args->the_post();
                $data .=  "<div class='jobs-content '>";
                $data .=  "<div class='logo'>".get_the_post_thumbnail()."</div>";
                $data .=   "</div>";
                endwhile;
                $data .=   "</div>";
                $data .=  "<span class='slick-arrow right-btn slick-next'></span>";
                $data .=   "</div>";
				
	endif;
	return $data;

}

add_shortcode('show_all_jobs', 'all_jobs_function');



//  * Function that Duplicate job positions and redirects then to the edit post screen
 
function rd_duplicate_post_as_draft(){
	global $wpdb;
	if (! ( isset( $_GET['post']) || isset( $_POST['post'])  || ( isset($_REQUEST['action']) && 'rd_duplicate_post_as_draft' == $_REQUEST['action'] ) ) ) {
		wp_die('No post to duplicate has been supplied!');
	}
 
	/*
	 * Nonce verification
	 */
	if ( !isset( $_GET['duplicate_nonce'] ) || !wp_verify_nonce( $_GET['duplicate_nonce'], basename( __FILE__ ) ) )
		return;
 
	/*
	 * get the original post id
	 */
	$post_id = (isset($_GET['post']) ? absint( $_GET['post'] ) : absint( $_POST['post'] ) );
	/*
	 * and all the original post data then
	 */
	$post = get_post( $post_id );
 
	/*
	 * if you don't want current user to be the new post author,
	 * then change next couple of lines to this: $new_post_author = $post->post_author;
	 */
	$current_user = wp_get_current_user();
	$new_post_author = $current_user->ID;
 
	/*
	 * if post data exists, create the post duplicate
	 */
	if (isset( $post ) && $post != null) {
 
		/*
		 * new post data array
		 */
		$args = array(
			'comment_status' => $post->comment_status,
			'ping_status'    => $post->ping_status,
			'post_author'    => $new_post_author,
			'post_content'   => $post->post_content,
			'post_excerpt'   => $post->post_excerpt,
			'post_name'      => $post->post_name,
			'post_parent'    => $post->post_parent,
			'post_password'  => $post->post_password,
			'post_status'    => 'draft',
			'post_title'     => $post->post_title,
			'post_type'      => $post->post_type,
			'to_ping'        => $post->to_ping,
			'menu_order'     => $post->menu_order
		);
 
		/*
		 * insert the post by wp_insert_post() function
		 */
		$new_post_id = wp_insert_post( $args );
 
		/*
		 * get all current post terms ad set them to the new post draft
		 */
		$taxonomies = get_object_taxonomies($post->post_type); // returns array of taxonomy names for post type, ex array("category", "post_tag");
		foreach ($taxonomies as $taxonomy) {
			$post_terms = wp_get_object_terms($post_id, $taxonomy, array('fields' => 'slugs'));
			wp_set_object_terms($new_post_id, $post_terms, $taxonomy, false);
		}
 
		/*
		 * duplicate all post meta just in two SQL queries
		 */
		$post_meta_infos = $wpdb->get_results("SELECT meta_key, meta_value FROM $wpdb->postmeta WHERE post_id=$post_id");
		if (count($post_meta_infos)!=0) {
			$sql_query = "INSERT INTO $wpdb->postmeta (post_id, meta_key, meta_value) ";
			foreach ($post_meta_infos as $meta_info) {
				$meta_key = $meta_info->meta_key;
				if( $meta_key == '_wp_old_slug' ) continue;
				$meta_value = addslashes($meta_info->meta_value);
				$sql_query_sel[]= "SELECT $new_post_id, '$meta_key', '$meta_value'";
			}
			$sql_query.= implode(" UNION ALL ", $sql_query_sel);
			$wpdb->query($sql_query);
		}
 
 
		/*
		 * finally, redirect to the edit post screen for the new draft
		 */
		wp_redirect( admin_url( 'post.php?action=edit&post=' . $new_post_id ) );
		exit;
	} else {
		wp_die('Post creation failed, could not find original post: ' . $post_id);
	}
}
add_action( 'admin_action_rd_duplicate_post_as_draft', 'rd_duplicate_post_as_draft' );
 
/*
 * Add the duplicate link to action list for post_row_actions
 */
function rd_duplicate_post_link( $actions, $post ) {
	if (current_user_can('edit_posts')) {
		$actions['duplicate'] = '<a href="' . wp_nonce_url('admin.php?action=rd_duplicate_post_as_draft&post=' . $post->ID, basename(__FILE__), 'duplicate_nonce' ) . '" title="Duplicate this item" rel="permalink">Duplicate</a>';
	}
	return $actions;
}
 
add_filter( 'post_row_actions', 'rd_duplicate_post_link', 10, 2 );





?>