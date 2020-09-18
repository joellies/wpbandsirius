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