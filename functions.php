<?php

//activer la fonctinnalité  wordpress pour un thème "image de mise en avant (post thumbnail)"

//rechercher les autre fonctionalité d'un thème qu'on pourrait activer
//  big-stars_post_thumbnail();
//  function mytheme_post_thumbnails() {
     add_theme_support('post-thumbnails');
// }
 //add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );

//telle fonction

// pour activer les widjets 

function bigstars_sidebars() {

     // Déclaration d'une sidebar dont l'identifiant (id) est bigstars-principal
     register_sidebar([
         'name' => 'Principal',
         'id' => 'bigstars-principal',
         'description' => 'Ma sidebar principale',
         'before_widget' => '',
         'after_widget' => '',
         'before_title' => '',
         'after_title' => '',
 
     ]);
 
     // Déclaration d'une sidebar dont l'identifiant (id) est bigstars-secondaire
     register_sidebar([
         'name' => 'Secondaire',
         'id' => 'bigstars-secondaire',
         'description' => 'Ma sidebar secondaire',
         'before_widget' => '',
         'after_widget' => '',
         'before_title' => '',
         'after_title' => '',
 
     ]);
 
 }
 
 // add_action permet d'exécuter des fonction à un instant T du chargement de wordpress
 // https://codex.wordpress.org/Plugin_API/Action_Reference
 // Notre fonction bigstars_sidebars() sera exécutée au moment de l'initialisation des widgets
 add_action('widgets_init', 'bigstars_sidebars');
 