<?php 
    function food_theme_setup(){
        add_theme_support('post-thumbnails');
    
        // Menus
        register_nav_menus(array(
            'primary'	=> __('Primary Menu'),
            'footer'=>__('Footer Menu')
        ));

    }
    add_action('after_setup_theme', 'food_theme_setup');
?>