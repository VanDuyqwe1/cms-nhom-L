<?php
/**
 * JobScout Widget Areas
 * 
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 * @package JobScout
 */

function jobscout_widgets_init(){    
    $sidebars = array(
        'sidebar'   => array(
            'name'        => __( 'Sidebar', 'jobscout' ),
            'id'          => 'sidebar', 
            'description' => __( 'Default Sidebar', 'jobscout' ),
        ),
        'cta' => array(
            'name'        => __( 'Call To Action Section', 'jobscout' ),
            'id'          => 'cta', 
            'description' => __( 'Add "Rara: Call To Action" widget for Call to Action section.', 'jobscout' ),
        ),
        'testimonial' => array(
            'name'        => __( 'Testimonial Section', 'jobscout' ),
            'id'          => 'testimonial', 
            'description' => __( 'Add "Rara: Testimonial" widget for testimonial section.', 'jobscout' ),
        ),
        'client' => array(
            'name'        => __( 'Client Section', 'jobscout' ),
            'id'          => 'client', 
            'description' => __( 'Add "Rara Client Logo" widget for client section.', 'jobscout' ),
        ),
        'footer-subscribe-for-newsletter'=> array(
            'name'        => __( 'Footer Subscribe For Newsletter', 'jobscout' ),
            'id'          => 'footer-subscribe-for-newsletter',
            'description' => __( 'Add footer one widgets here.', 'jobscout' ),
        ),
        'footer-company-name'=> array(
            'name'        => __( 'Footer Company Name', 'jobscout' ),
            'id'          => 'footer-company-name',
            'description' => __( 'Add footer two widgets here.', 'jobscout' ),
        ),
        'footer-pages'=> array(
            'name'        => __( 'Footer Pages', 'jobscout' ),
            'id'          => 'footer-pages',
            'description' => __( 'Add footer three widgets here.', 'jobscout' ),
        ),
        'footer-socials'=> array(
            'name'        => __( 'Footer Socials', 'jobscout' ),
            'id'          => 'footer-socials',
            'description' => __( 'Add footer four widgets here.', 'jobscout' ),
        ),
        'contact-us'=> array(
            'name'        => __( 'contact us', 'jobscout' ),
            'id'          => 'contact-us', 
            'description' => __( 'Add contact-us widgets here.', 'jobscout' ),
        )
    );
    
    foreach( $sidebars as $sidebar ){
        register_sidebar( array(
    		'name'          => esc_html( $sidebar['name'] ),
    		'id'            => esc_attr( $sidebar['id'] ),
    		'description'   => esc_html( $sidebar['description'] ),
    		'before_widget' => '<section id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</section>',
    		'before_title'  => '<h2 class="widget-title" itemprop="name">',
    		'after_title'   => '</h2>',
    	) );
        
        
    }
}
add_action( 'widgets_init', 'jobscout_widgets_init' );