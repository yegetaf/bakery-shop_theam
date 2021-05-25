<?php

function by_setup(){

	$version = wp_get_theme()->get('version');
	wp_enqueue_style('BYBakery', get_template_directory(),'/style.css');
	wp_enqueue_style('bootstrap',get_template_directory(),'/assets/bootstrap/css/bootstrap.min.css',array(), '1.2.2.3', true);
	wp_enqueue_style('fontawesome',get_template_directory(),'/assets/fonts/fontawesome-all.min.css',array(), '1.2.2.3', true);
	wp_enqueue_style('font-awesome',get_template_directory(),'/assets/fonts/font-awesome.min.css',array(), '1.2.2.3', true);
	wp_enqueue_style('fontawesome5-overrides',get_template_directory(),'/assets/fonts/fontawesome5-overrides.min.css',array(), '1.2.2.3', true);
	wp_enqueue_style('Bold-BS4-Cards-with-Hover-Effect-50-1',get_template_directory(),'assets/css/Bold-BS4-Cards-with-Hover-Effect-50-1.css',array(), '1.2.2.3', true);
	wp_enqueue_style('Bold-BS4-Cards-with-Hover-Effect-50',get_template_directory(),'https://github.com/yegetaf/bakery-shop_theam/blob/main/bakery-shop_theam/asset/css/Carousel-Hero.css',array(), '1.2.2.3', true);
	wp_enqueue_style('Carousel-Hero',get_template_directory(),'/assets/css/Carousel-Hero.css',array(), '1.2.2.3', true);
	wp_enqueue_style('Contact-FormModal-Contact-Form-with-Google-Map',get_template_directory(),'/assets/css/Contact-FormModal-Contact-Form-with-Google-Map.css',array(), '1.2.2.3', true);
	wp_enqueue_style('Dark-NavBar',get_template_directory(),'/assets/css/Dark-NavBar.css',array(), '1.2.2.3', true);
	wp_enqueue_style('Features-Boxed-Remixed-1',get_template_directory(),'/assets/css/Features-Boxed-Remixed-1.css',array(), '1.2.2.3', true);
	wp_enqueue_style('Features-Boxed-Remixed-2',get_template_directory(),'/assets/css/Features-Boxed-Remixed-2.css',array(), '1.2.2.3', true);
	wp_enqueue_style('Features-Boxed-Remixed-3',get_template_directory(),'/assets/css/Features-Boxed-Remixed-3.css',array(), '1.2.2.3', true);
	wp_enqueue_style('Features-Boxed-Remixed',get_template_directory(),'/assets/css/Features-Boxed-Remixed.css',array(), '1.2.2.3', true);
	wp_enqueue_style('Navigation-with-Button',get_template_directory(),'/assets/css/Navigation-with-Button.css',array(), '1.2.2.3', true);
	wp_enqueue_style('Search-Input-responsive',get_template_directory(),'/assets/css/Search-Input-responsive.css',array(), '1.2.2.3', true);
	wp_enqueue_style('styles',get_template_directory(),'/assets/css/styles.css',array(), '1.2.2.3', true);
	wp_enqueue_style('WOWSlider-about-us-1',get_template_directory(),'/assets/css/WOWSlider-about-us-1.css',array(), '1.2.3', true);
	wp_enqueue_style('WOWSlider-about-us-2',get_stylesheet(),'/assets/css/WOWSlider-about-us-2.css',array(), '2.2.3', true);
	wp_enqueue_style('WOWSlider-about-us',get_template_directory(),'/assets/css/WOWSlider-about-us.css',array(), '1.2.3', true);
	}
 
add_action('wp_enqueue_scripts','by_setup');

function by_init(){

}


?>