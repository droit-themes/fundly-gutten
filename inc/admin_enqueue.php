<?php 
/**
 * Fundly admin Enqueue 
 */

add_action( 'admin_enqueue_scripts', 'fundly_admin_enqueues');

function fundly_admin_enqueues() {
  
    if(function_exists('get_current_screen')){
    
        $screen = get_current_screen(); 
        
        if ( $screen->base == 'toplevel_page_fundly_options' ) {
            wp_enqueue_style( 'fundly-redux-style', FUNDLY_CSS.'/redux-style.css' );
        }
    }
    
}
