<?php 
    function zBoomMusic_setup(){
        add_theme_support('post-thumbnails');
        add_theme_support('menus');

        $defaults = array(
            'height'               => 100,
            'width'                => 400,
            'flex-height'          => true,
            'flex-width'           => true,
            'header-text'          => array( 'site-title', 'site-description' ),
            'unlink-homepage-logo' => true, 
        );
        add_theme_support( 'custom-logo',$defaults);

        $defaults = array(
            'default-color'          => '',
            'default-image'          => '',
            'default-repeat'         => 'repeat',
            'default-position-x'     => 'left',
                'default-position-y'     => 'top',
                'default-size'           => 'auto',
            'default-attachment'     => 'scroll',
            'wp-head-callback'       => '_custom_background_cb',
            'admin-head-callback'    => '',
            'admin-preview-callback' => ''
        );
        add_theme_support( 'custom-background', $defaults );
        register_nav_menus( array(
	    	'primary_menu' => __( 'Primary Menu', 'zBoomMusic' ),
	    	'mini_menu'  => __( 'Mini Menu', 'zBoomMusic' ),
		) );
    }
    add_action('after_setup_theme','zBoomMusic_setup');

    
    function zBoomMusic_register_widgets() {
        register_sidebar(array(
            "name" => __("Sidebar widgets","zBoomMusic"),
            "id" => "right-sidebar-widget",
            "description" => __("A widget area location to the right side","zBoomMusic"),
            "before_widget" => '<div class="box">',
            "after_widget" => '</div>',
            "before_title" => '<div class="heading">',
            "after_title" => '<div class="content">',
        ));
        register_sidebar(array(
            "name" => __("Footer 1 widgets","zBoomMusic"),
            "id" => "footer-1-widget",
            "description" => __("A widget area location to the right side","zBoomMusic"),
            "before_widget" => '<div class="box">',
            "after_widget" => '</div>',
            "before_title" => '<div class="heading">',
            "after_title" => '<div class="content">',
        ));
        register_sidebar(array(
            "name" => __("Footer 2 widgets","zBoomMusic"),
            "id" => "footer-2-widget",
            "description" => __("A widget area location to the right side","zBoomMusic"),
            "before_widget" => '<div class="box">',
            "after_widget" => '</div>',
            "before_title" => '<div class="heading">',
            "after_title" => '<div class="content">',
        ));
        register_sidebar(array(
            "name" => __("Footer 3 widgets","zBoomMusic"),
            "id" => "footer-3-widget",
            "description" => __("A widget area location to the right side","zBoomMusic"),
            "before_widget" => '<div class="box">',
            "after_widget" => '</div>',
            "before_title" => '<div class="heading">',
            "after_title" => '<div class="content">',
        ));
        register_sidebar(array(
            "name" => __("Footer 4 widgets","zBoomMusic"),
            "id" => "footer-4-widget",
            "description" => __("A widget area location to the right side","zBoomMusic"),
            "before_widget" => '<div class="box">',
            "after_widget" => '</div>',
            "before_title" => '<div class="heading">',
            "after_title" => '<div class="content">',
        ));
       
    }
    add_action( 'widgets_init', 'zBoomMusic_register_widgets' );

    function create_custom_post_type() {

        register_post_type( 'Sliders',
        
        array(
        
        'labels' => array(
        
        'name' => __( 'Sliders' ),
        
        'singular_name' => __( 'Slider' )
        
        ),
        
        'public' => true,
        
        'has_archive' => true,
        
        'supports' => array( 'title', 'editor', 'thumbnail' )
        
        )
        
        );
        
        }
        
        add_action( 'init', 'create_custom_post_type' );

        function custom_search_form($form){
            $form = '<form action="'.home_url('/').'">
            <input type="text" name="s" value="Search..." onfocus="if (this.value == &#39;Search...&#39;) {this.value = &#39;&#39;;}" onblur="if (this.value == &#39;&#39;) {this.value = &#39;Search...&#39;;}">
            </form>';
            return $form;
        }
        add_filter( 'get_search_form', 'custom_search_form',40 );
 
