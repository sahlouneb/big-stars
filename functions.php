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

 //REGISTER/POST/TYPE
 
 add_action( 'init', 'register_portfolio' );



function register_portfolio() {
    $labels = array(
        'name'                  => _x(  'Galaxies', 'Post Type General Name' ),
        'singular_name'         => _x( 'Galaxie', 'Post Type General Name'),
        // Le libellé affiché dans le menu
		'menu_name'           => __( 'Galaxie'),
		// Les différents libellés de l'administration
		'all_items'           => __( 'Toutes les galaxies'),
		'view_item'           => __( 'Voir les galaxies'),
		'add_new_item'        => __( 'Ajouter une nouvelle galaxie'),
		'add_new'             => __( 'Ajouter'),
		'edit_item'           => __( 'Editer la galaxie'),
		'update_item'         => __( 'Modifier la galaxie'),
		'search_items'        => __( 'Rechercher une galaxie'),
		'not_found'           => __( 'Non trouvée'),
		'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
       
    );
 
    $args = array(
        'label'               => __( 'Galaxies'),
		'description'         => __( 'Tous sur les Galaxies'),
        'labels'              => $labels,
        'menu_icon'           => 'dashicons-admin-site-alt',
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		/* 
		* Différentes options supplémentaires
		*/
		'show_in_rest' => true,
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			  => array( 'slug' => 'Galaxie'),
    );
    
    // On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
    register_post_type( 'SerieTV ', $args );
}
 


?>