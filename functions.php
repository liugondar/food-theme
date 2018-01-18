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
    
    function debug_to_console( $data, $context = 'Debug in Console' ) {

        // Buffering to solve problems frameworks, like header() in this and not a solid return.
        ob_start();

        $output  = 'console.info( \'' . $context . ':\' );';
        $output .= 'console.log(' . json_encode( $data ) . ');';
        $output  = sprintf( '<script>%s</script>', $output );
    
        echo $output;
    }

?>