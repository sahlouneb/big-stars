<?php

//activer la fonctinnalité  wordpress pour un thème "image de mise en avant (post thumbnail)"

//rechercher les autre fonctionalité d'un thème qu'on pourrait activer
 big-stars_post_thumbnail();
 function mytheme_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );

//telle fonction