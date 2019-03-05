<?php
show_admin_bar(false);
if ( ! function_exists( 'booking_setup' ) ) :
function booking_setup() {
    add_theme_support( 'post-thumbnails' );
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'booking' ),
		'footer'=>esc_html__('Footer Menu','booking')
		) );
}
endif;
add_action( 'after_setup_theme', 'booking_setup' );

function booking_scripts() {
	wp_enqueue_style( 'booking-style', get_stylesheet_uri() );
    if (!is_404()) {
       wp_enqueue_style ('booking-custom-min-css', get_template_directory_uri().'/assets/css/custom.min.css'); 
		
		
       wp_enqueue_style ( 'booking-b2hengine', 'https://www.booking2hotels.com/Frontengine/css/b2h.engine.v3.min.css');
       wp_enqueue_script ('booking-custom-min-js', get_template_directory_uri().'/assets/js/custom.min.js', array(), '20170823', true );
       wp_enqueue_script ( 'booking-b2h-engine-js', 'https://www.booking2hotels.com/Frontengine/pickadate/b2h.engine.v3.min.js', array(), '28052016', true );
       wp_enqueue_script( 'jqueryCookie', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js', array(), '20161013', true );
      }
	   wp_enqueue_script('jquery','',array(),'',false);
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	if(is_page('booking2hotels_reset_password')){
		wp_enqueue_style( 'booking-resetpassword', 'http://engine.booking2hotels.com/css/resetpassword.css' );
		wp_enqueue_script( 'booking-b2h-activate', 'http://engine.booking2hotels.com/js/b2h-activate.js', array(), '20151022', true );
	}
	if(is_page('booking2hotels_activate')){
			wp_enqueue_style( 'booking-activate', 'http://engine.booking2hotels.com/css/activate.css' );
			wp_enqueue_script( 'booking-b2h-activate', 'http://engine.booking2hotels.com/js/b2h-activate.js', array(), '20151022', true );
	}
	if(is_page('booking2hotels_thankyou')){
			wp_enqueue_script( 'booking-b2h-thankyou', 'http://engine.booking2hotels.com/js/thankyou_content.js', array(), '20151022', true );
	}
}
add_action( 'wp_enqueue_scripts', 'booking_scripts' );
//require_once('wp_bootstrap_navwalker.php');
//add_filter('show_admin_bar', '__return_false');
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
		));

    if(current_user_can('edit_b2h_setting')){
       acf_add_options_sub_page(array(
       		'page_title' 	=> 'Theme booking Settings',
       		'menu_title'	=> 'Booking Engine',
       		'parent_slug'	=> 'theme-general-settings',
       ));
     }
}
if(!function_exists('search_init()')){
	function search_init(){
    $currentLanguage = get_bloginfo("language");
    
        switch ($currentLanguage) {
            case "en-US":
                $langID = 1;
                break;
            case "th-TH":
                $langID = 2;
                break;
            case "ja":
                $langID = 3;
                break;
            case "zh-CN":
                $langID = 4;
                break;
            case "ko-KR":
                $langID = 5;
                break;
            case "ar":
                $langID = 6;
                break;
            default:
                $langID = 1;

        } 
		printf('<script>
		$(document).ready(function($){
			$("#frmCheckRate").b2hPicker({
                PID:%1$s,
                defaultdate:%2$s,
                UrgentBooking: %3$s,
                PromoCode :%4$s,
                selectMonths: %5$s,
                selectYears: %6$s,
                module_member :%7$s,
                member_page:%8$s,
                CrossDomain :%9$s,
                RateExchangeId:%10$s,
                Version:%11$s,
                Review: %12$s,
                Promotion: %13$s,
                DateCalendarFormat: %14$s,
                lang: %15$s,
			});
		});
		</script>',
        get_field('product_id','options'),
		get_field('default_date','options')?'true':'false',
		get_field('urgent_booking','options')?'true':'false',
		get_field('promotion_code','options')?'true':'false',
		get_field('select_month','options')?'true':'false',
		get_field('select_year','options')?'true':'false',
		get_field('member_system','options')?'true':'false',
		get_field('member_page','options')?'true':'false',
		get_field('cross_domain','options')?'true':'false',
		get_field('rate_exchange','options'),
        get_field('version','options'),
        get_field('review','options')?'true':'false',
		get_field('promotion','options')?'true':'false',
        get_field('date_calendar_format','options'),
        $langID
		);
	}
}
if(!function_exists('get_booking_page')){
	function get_booking_page(){
        //echo get_permalink(get_page_by_path('booking2hotels_book'));
		$page_action = array(
			"booking"=>get_permalink(get_page_by_path('booking2hotels_book')),
			"promotion"=>get_permalink(get_page_by_path('booking2hotels_promotion')),
			"review"=>get_permalink(get_page_by_path('booking2hotels_review')),
			"review_write"=>get_permalink(get_page_by_path('booking2hotels_review_write')),
			"map"=>get_permalink(get_page_by_path('booking2hotels_map')),
			"thankyou"=>get_permalink(get_page_by_path('booking2hotels_thankyou'))
			);
		return $page_action;
	}
}

if(!function_exists('get_featureimage')){
	function get_featureimage(){
		global $post;
		if ( has_post_thumbnail() ) {
			  the_post_thumbnail('medium_large',array( 'class' => 'img-responsive'));
		}else{
			echo '<img src="'.get_template_directory_uri().'/images/img404.jpg" class="img-responsive">';
		}
	}
}

//show_admin_bar(false);
function include_header_script(){
	if(get_field('header_script','options')){
		echo get_field('header_script','options');
	}
}
add_action('wp_head','include_header_script',100);



function include_footer_script(){
	if(get_field('footer_script','options')){
		echo get_field('footer_script','options');
	}
}
add_action('wp_footer','include_footer_script',100);

function include_body_script(){
	if(get_field('body_script','options')){
		echo get_field('body_script','options');
	}
}



add_filter( 'wp_page_menu_args', 'home_page_menu_args' );
define('ICL_DONT_LOAD_LANGUAGE_SELECTOR_CSS', true);
require get_template_directory().'/inc/shortcode/b2hrate.php';
require get_template_directory().'/wp_bootstrap_navwalker.php';

if(!function_exists('get_copyright')){
	function get_copyright(){
		
		$hotelName = get_bloginfo('name');
		
		printf(get_field('copyright','options'),$hotelName);
	}
}
function get_favicon(){
	if(get_field('favicon','options')){
		$favicon=get_field('favicon','options');
        printf('<link rel="shortcut icon" href="%1$s">',$favicon ['url']);
	}
}


if ( ! defined( 'WPCF7_AUTOP' ) )
 define( 'WPCF7_AUTOP', false );
function remove_cssjs_ver($src) {
 if (strpos($src, '?ver='))
  $src = remove_query_arg('ver', $src);
 $url = parse_url(site_url());
 $path = '';
 if ($url['path'])
  $path = $url['path'];
 if (is_admin()) return $src;
 return str_replace(site_url(), $path, $src);
}
add_filter('style_loader_src', 'remove_cssjs_ver', 10, 2);
add_filter('script_loader_src', 'remove_cssjs_ver', 10, 2);

//if(!function_exists('textexcerpt')) {
//    function textexcerpt($Details,$length){
//         if(strlen($Details) > 120) {
//                  return mb_substr($Details,0,$length,'utf-8') . "...";
//              } else {
//                 return $Details;
//              }
//     }
//}



// change field type  ( select > checkbox ) //
function my_acf_field_checkbox( $field ){

        $the_query = new WP_Query(array(
           'post_type' => 'amenity',
           'posts_per_page' => -1
        ));
         $my_cpt_arr = array();
            if ($the_query->have_posts()) {
               while ($the_query->have_posts()) {
                    $the_query->the_post();
                   $my_cpt_arr[get_the_ID()] = get_the_title();
                }
           }


            $field['choices'] = $my_cpt_arr;
            $field['return_format'] = 'value';
//            $field['ui'] = 0;
            $field['class'] = 'checkboxStyle';
            $field['layout'] = 'vertical';
            $field['type'] = 'checkbox';
//            var_dump($field);
            return $field;

};

//add_filter('acf/load_field/name=amenity', 'my_acf_field_checkbox');


add_filter('body_class', 'wpml_body_class278594');
function wpml_body_class278594($classes) {
    if(defined('ICL_LANGUAGE_CODE'))
    $classes[] = 'lang-' . ICL_LANGUAGE_CODE;
    return $classes;
}


function custom_short_excerpt($excerpt){
    
	$limit = 50 ;
//	var_dump($excerpt);
//	var_dump(strpos($excerpt, ' ', $limit));
//	var_dump(substr($excerpt, 0, $limit));
//	var_dump(substr($excerpt, 0, strpos($excerpt, ' ', $limit)));
//	die();
	
	if (strlen($excerpt) > $limit) {
		return substr($excerpt, 0, strpos($excerpt, ' ', $limit))." ...";
	}

	return $excerpt;
}

add_filter('the_excerpt', 'custom_short_excerpt');




function resources_cpt_generating_rule() {
	global $wp_rewrite;
    $rules = array();
    $terms = get_terms( array(
        'taxonomy' => 'room_suite_wing',
        'hide_empty' => false,
    ) );
   
    $post_type = 'accommodation';
    foreach ($terms as $term) {    
                
        $rules['rooms-suites/' . $term->slug . '/([^/]*)$'] = 'index.php?post_type=' . $post_type. '&accommodation=$matches[1]&name=$matches[1]';
                        
    }
    // merge with global rules
    $wp_rewrite->rules = $rules + $wp_rewrite->rules;
	
}
//add_action('generate_rewrite_rules', 'resources_cpt_generating_rule');



function mydid_flush_rewrite_rules() {
    global $wp_rewrite;
    $wp_rewrite->flush_rules();
}
//add_action( 'init', 'mydid_flush_rewrite_rules');


function change_link( $permalink, $post ) {
    
    if( $post->post_type == 'accommodation' ) {
        $resource_terms = get_the_terms( $post, 'room_suite_wing' );
        $term_slug = '';
        if( ! empty( $resource_terms ) ) {
            foreach ( $resource_terms as $term ) {
                // The featured resource will have another category which is the main one
                if( $term->slug == 'featured' ) {
                    continue;
                }
                $term_slug = $term->slug;
                break;
            }
        }
        $permalink = get_home_url() ."/rooms-suites/" . $term_slug . '/' . $post->post_name;
    }
    return $permalink;
}
//add_filter('post_type_link',"change_link",10,2);