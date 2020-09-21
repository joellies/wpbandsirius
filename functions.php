<?php

function on_wpTest_init()
{
  register_nav_menu('header_menu', 'Header Menu');
}

add_action('init', 'on_wpTest_init');

//Créer un menu burger dans notre thème

//Cette action est lancée quand un menu est généré
add_action('wp_nav_menu', 'wpTest_menu_responsive', 9, 2);

function wpTest_menu_responsive($menu, $args)
{
  //On check que nous avons le bon menu
  if ('header_menu' == $args->theme_location) {
    //on ajoute un boutton
    $button = '<button type="button" class="toggle-menu"><i class="fa fa-bars"></i></button>';
    $menu = preg_replace('/(<nav(.*?)>)/', '${1}' . $button, $menu);
  }
  return $menu;
};



//Style CSS

//Le 1er param est le nom de l'action, le 2e la fonction associée à l'action
add_action('wp_enqueue_scripts', 'wpTest_styles_scripts');

function wpTest_styles_scripts()
{
  //on enregistre le CSS (le 1er param est l'id du css, le 2e est le chemin)
  wp_register_style(
    'wpTest-style',
    //fait reference au dossier du t;hème
    get_template_directory_uri() . '/style.css'
    // wp_enqueue_script( 'markov-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

  );
  //on ajoute le css dans notre page avec
  wp_enqueue_style('wpTest-style');


  //Scripts JS
  //on enregistre le js
  wp_register_script(
    'wpTest-plugins',
    get_template_directory_uri() . '/js/plugins.js',
    array('jquery')
  );
  wp_register_script(
    'wpTest-app',
    get_template_directory_uri() . '/js/app.js',
    array('jquery', 'wpTest-plugins')
  );
  //On ajoute le JS dans notre page
  wp_enqueue_script('wpTest-plugins');
  wp_enqueue_script('wpTest-app');

  //Script Internet Explorer 9
  wp_register_script(
    'wpTest-html',
    get_template_directory_uri() . '/js/ie-support/html5.js'
  );

  wp_register_script(
    'wpTest-respond',
    get_template_directory_uri() . '/js/ie-support/respond.js'
  );

  wp_enqueue_script('wpTest-html');
  wp_enqueue_script('wpTest-respond');

  //JS pour IE9
  wp_script_add_data('ie-support-html5', 'conditional', 'lt IE 9');
  wp_script_add_data('ie-support-respond', 'conditional', 'lt IE 9');;
}

//Ajouter polices personnalisées pour le thème

function add_google_fonts()
{
  wp_enqueue_style('google_fonts', 'http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900');
};
add_action('wp_enqueue_scripts', 'add_google_fonts');

function add_font_awesome()
{
  wp_enqueue_style('font-awesome', get_template_directory_uri() . '/fonts/font-awesome.min.css');
};
add_action('wp_enqueue_scripts', 'add_font_awesome');

//Titre

add_theme_support('title-tag');

//Images à la une

function wpTest_post_thumbnails()
{
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'wpTest_post_thumbnails');

//Taille de l'excerpt

function new_excerpt_length($length)
{
  return 50;
}
add_filter('excerpt_length', 'new_excerpt_length');

//Custom post type

// Register Custom Post Type
function wpTest_custom_post_type()
{

  $labels = array(
    'name'                  => _x('Albums', 'Post Type General Name', 'wpTest'),
    'singular_name'         => _x('Album', 'Post Type Singular Name', 'wpTest'),
    'menu_name'             => __('Albums', 'wpTest'),
    'name_admin_bar'        => __('Album', 'wpTest'),
    'archives'              => __('Album Archives', 'wpTest'),
    'attributes'            => __('Album Attributes', 'wpTest'),
    'parent_item_colon'     => __('Parent Album:', 'wpTest'),
    'all_items'             => __('All Albums', 'wpTest'),
    'add_new_item'          => __('Add New Album', 'wpTest'),
    'add_new'               => __('Add New', 'wpTest'),
    'new_item'              => __('New Album', 'wpTest'),
    'edit_item'             => __('Edit Album', 'wpTest'),
    'update_item'           => __('Update Album', 'wpTest'),
    'view_item'             => __('View Album', 'wpTest'),
    'view_items'            => __('View Albums', 'wpTest'),
    'search_items'          => __('Search Album', 'wpTest'),
    'not_found'             => __('Not found', 'wpTest'),
    'not_found_in_trash'    => __('Not found in Trash', 'wpTest'),
    'featured_image'        => __('Featured Image', 'wpTest'),
    'set_featured_image'    => __('Set featured image', 'wpTest'),
    'remove_featured_image' => __('Remove featured image', 'wpTest'),
    'use_featured_image'    => __('Use as featured image', 'wpTest'),
    'insert_into_item'      => __('Insert into album', 'wpTest'),
    'uploaded_to_this_item' => __('Uploaded to this album', 'wpTest'),
    'items_list'            => __('Albums list', 'wpTest'),
    'items_list_navigation' => __('Albums list navigation', 'wpTest'),
    'filter_items_list'     => __('Filter Albums list', 'wpTest'),
  );
  $args = array(
    'label'                 => __('Album', 'wpTest'),
    'description'           => __('Discography of Spritz', 'wpTest'),
    'labels'                => $labels,
    'supports'              => array('title', 'editor', 'thumbnail', 'excerpt'),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
    'menu_icon' => 'dashicons-media-audio'
  );
  register_post_type('album', $args);
}
add_action('init', 'wpTest_custom_post_type', 0);