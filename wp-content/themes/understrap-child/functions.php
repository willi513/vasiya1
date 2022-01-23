<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'understrap-styles' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION

function cptui_register_my_cpts() {

	/**
	 * Post Type: Недвижимость.
	 */

	$labels = [
		"name" => __( "Недвижимость", "custom-post-type-ui" ),
		"singular_name" => __( "Недвижимость", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Недвижимость", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "nedvizhimost", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-list-view",
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "nedvizhimost", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );

/***/

function cptui_register_my_cpts_nedvizhimost() {

	/**
	 * Post Type: Недвижимость.
	 */

	$labels = [
		"name" => __( "Недвижимость", "custom-post-type-ui" ),
		"singular_name" => __( "Недвижимость", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Недвижимость", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "nedvizhimost", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-list-view",
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "nedvizhimost", $args );
}

add_action( 'init', 'cptui_register_my_cpts_nedvizhimost' );


/***/

function cptui_register_my_taxes() {

	/**
	 * Taxonomy: Тип недвижимости.
	 */

	$labels = [
		"name" => __( "Тип недвижимости", "custom-post-type-ui" ),
		"singular_name" => __( "Тип недвижимости", "custom-post-type-ui" ),
	];

	
	$args = [
		"label" => __( "Тип недвижимости", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'tip_nedvizhimosti', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "tip_nedvizhimosti",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "tip_nedvizhimosti", [ "nedvizhimost" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes' );

/***/

function cptui_register_my_taxes_tip_nedvizhimosti() {

	/**
	 * Taxonomy: Тип недвижимости.
	 */

	$labels = [
		"name" => __( "Тип недвижимости", "custom-post-type-ui" ),
		"singular_name" => __( "Тип недвижимости", "custom-post-type-ui" ),
	];

	
	$args = [
		"label" => __( "Тип недвижимости", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'tip_nedvizhimosti', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "tip_nedvizhimosti",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "tip_nedvizhimosti", [ "nedvizhimost" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_tip_nedvizhimosti' );


/***/

/*
Как связать посты из двух произвольных типов записей?
https://wp-kama.ru/question/kak-uvyazat-posty-iz-dvuh-proizvolnyh-tipov-zapisej
*/
// Добавим метабокс выбора городов к недвижевости
add_action('add_meta_boxes', function () {
	add_meta_box( 'nedvizhimost_town', 'Город', 'nedvizhimost_town_metabox', 'nedvizhimost', 'side', 'low'  );
}, 1);
// метабокс с селектом городов
function nedvizhimost_town_metabox( $post ){
	$towns = get_posts(array( 'post_type'=>'town', 'posts_per_page'=>-1, 'orderby'=>'post_title', 'order'=>'ASC' ));
	if( $towns ){
		// чтобы портянка пряталась под скролл...
		echo '<div style="max-height:200px; overflow-y:auto;"><ul>';
		foreach( $towns as $town ){
			echo '<li><label><input type="radio" name="post_parent" value="'. $town->ID .'" '. checked($town->ID, $post->post_parent, 0) .'> '. esc_html($town->post_title) .'</label></li>';
		}
		echo '</ul></div>';
	}
	else
		echo 'городов нет...';
}


/***/

// проверка подключения недвижимости
add_action('add_meta_boxes', function(){
	add_meta_box( 'nedvizhimosts', 'Недвижимость в городе', 'town_nedvizhimosts_metabox', 'town', 'side', 'low'  );
}, 1);

function town_nedvizhimosts_metabox( $post ){
	$nedvizhimosts = get_posts(array( 'post_type'=>'nedvizhimost', 'post_parent'=>$post->ID, 'posts_per_page'=>-1, 'orderby'=>'post_title', 'order'=>'ASC' ));

	if( $nedvizhimosts ){
		foreach( $nedvizhimosts as $nedvizhimost ){
			echo $nedvizhimost->post_title .'<br>';
		}
	}
	else
		echo 'Недвижимости нет...';
}

/***/

