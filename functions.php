<?php
   function medamine_theme_support(){

   add_theme_support('title-tag');

 }

 add_action('after_setup_theme','medamine_theme_support');


  
   function medamine_register_styles(){
        $version = wp_get_theme()->get('Version');
        wp_enqueue_style('medamine-style', get_template_directory_uri() . "/style.css",array(), 'Version','all');
        wp_enqueue_style('medamine-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" ,array() , '4.1.3','all');
        wp_enqueue_style('medamine-fontawesome',"https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@500&display=swap" , array(), 'V ersion','all');             
   }

   add_action('wp_enqueue_scripts','medamine_register_styles');



   function medamine_register_scripts(){
    
     wp_enqueue_script('medamine-bootstrap', "https://code.jquery.com/jquery-3.3.1.slim.min.js" ,array() , '3.3.1', true); 
     wp_enqueue_script('medamine-popper', "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ,array() , '1.14.3', true);      
     wp_enqueue_script('medamine-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ,array() , '4.1.3', true);        
     
                          
}

add_action('wp_enqueue_scripts','medamine_register_scripts');

?>