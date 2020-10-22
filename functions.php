<?php

//* * Modern Jquery * *//

add_action('wp_enqueue_scripts', 'nwd_modern_jquery');

function nwd_modern_jquery() {
    global $wp_scripts;
    if(is_admin()) return;
    $wp_scripts->registered['jquery-core']->src = get_stylesheet_directory_uri() .'/assets/utils/jquery/jquery-3.5.1.min.js';
    $wp_scripts->registered['jquery']->deps = ['jquery-core'];
}

//* * Register Menus * *//

function register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'footer-menu' => __( 'Footer Menu' )
      )
    );
  }
  add_action( 'init', 'register_my_menus' );

//* * Register Custom Navigation Walker * *//

function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

//* * register widget areas * *//

function register_my_widgets(){
	register_sidebar( array(
		'name' => "Правая боковая панель сайта",
		'id' => 'right-sidebar',
		'description' => 'Эти виджеты будут показаны в правой колонке сайта',
		'before_title' => '<h2 class="footer-column__title">',
		'after_title' => '</h2>',
		'before_widget' => '',
        'after_widget' => ''
	) );
}
add_action( 'widgets_init', 'register_my_widgets' );


function register_my_widgets_footer_column_1(){
	register_sidebar( array(
		'name' => 'Footer Column 1',
		'id' => 'footer_column_1',
		'description' => 'Виджет в футере 1',
		'before_title' => '<h2 class="footer-column__title">',
		'after_title' => '</h2>',
		'before_widget' => '',
        'after_widget' => ''
	) );
}
add_action( 'widgets_init', 'register_my_widgets_footer_column_1' );

function register_my_widgets_footer_column_2(){
	register_sidebar( array(
		'name' => 'Footer Column 2',
		'id' => 'footer_column_2',
		'description' => 'Виджет в футере 2',
		'before_title' => '<h2 class="footer-column__title">',
		'after_title' => '</h2>',
		'before_widget' => '',
        'after_widget' => ''
	) );
}
add_action( 'widgets_init', 'register_my_widgets_footer_column_2' );

function register_my_widgets_footer_column_3(){
	register_sidebar( array(
		'name' => 'Footer Column 3',
		'id' => 'footer_column_3',
		'description' => 'Виджет в футере 3',
		'before_title' => '<h2 class="footer-column__title">',
		'after_title' => '</h2>',
		'before_widget' => '',
        'after_widget' => ''
	) );
}
add_action( 'widgets_init', 'register_my_widgets_footer_column_3' );

function register_my_widgets_footer_column_4(){
	register_sidebar( array(
		'name' => 'Footer Column 4',
		'id' => 'footer_column_4',
		'description' => 'Виджет в футере 4',
		'before_title' => '<h2 class="footer-column__title">',
		'after_title' => '</h2>',
		'before_widget' => '',
        'after_widget' => ''
	) );
}
add_action( 'widgets_init', 'register_my_widgets_footer_column_4' );

//* * Remove WP auto adding <p> * *//

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

//* * Add miniatures support * *//

add_theme_support( 'post-thumbnails' ); //

//* * Add pagination * *//

function pagination($pages = '', $range = 4)
{
    $showitems = ($range * 2)+1;

    global $paged;
    if(empty($paged)) $paged = 1;

    if($pages == '')
    {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if(!$pages)
        {
            $pages = 1;
        }
    }

    if(1 != $pages)
    {
        echo "<div class=\"pagination\"><span>Page ".$paged." of ".$pages."</span>";
        if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
        if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";

        for ($i=1; $i <= $pages; $i++)
        {
            if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
            {
                echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
            }
        }

        if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";
        if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
        echo "</div>\n";
    }
}

//* * Add sale date shortcode * *//
function display_sale_date( $atts ) {

	$lastday = date("t", strtotime("+1 month") ) ;
	
	$d = date('m');
	
	if ($d == 1) {
	$nextmonth =" февраля";}
	if ($d == 2) {
	$nextmonth =" марта";}
	if ($d == 3) {
	$nextmonth =" апреля";}
	if ($d == 4) {
	$nextmonth =" мая";}
	if ($d == 5) {
	$nextmonth =" июня ";}
	if ($d == 6) {
	$nextmonth =" июля";}
	if ($d == 7) {
	$nextmonth =" июля";}
	if ($d == 8) {
	$nextmonth =" августа";}
	if ($d == 9) {
	$nextmonth =" сентября";}
	if ($d == 10) {
	$nextmonth =" октября";}
	if ($d == 11) {
	$nextmonth =" ноября";}
	if ($d == 12) {
	$nextmonth =" января";}
	
	
	$res = $lastday . $nextmonth;
	return $res;
	}
	add_shortcode( 'sale_date', 'display_sale_date');
	

	// disable image scaling
	add_filter( 'big_image_size_threshold', '__return_false' );

	
	add_action( 'wp_enqueue_scripts', 'smoothstate_method' );
		function smoothstate_method(){
		wp_enqueue_script( 'smoothstate-js', get_stylesheet_directory_uri() . '/assets/utils/smoothState/smoothstate.min.js', array( 'jquery' ), '0.5.2' );
		wp_enqueue_script( 'smoothstateload-js', get_stylesheet_directory_uri() . '/assets/utils/smoothState/smoothstateload.min.js', array( 'jquery', 'smoothstate-js' ), '1.0.0' );
	}