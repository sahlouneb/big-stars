<?php
/** index.php
 * Ce fichier est le fichier par défaut du thème (est appelé si aucun fichier spécifique n'existe pour le contenu demandé)
 * @see : https://wphierarchy.com/*/

//chargement du fichier header.php
get_header();



        if(have_posts()){


                while(have_posts()){

                    the_post();

                    ?>

                    <article>
                        <?php the_date();//date du post ?>

                        <h2>
                             <a href="<?php the_permalink(); // url du post ?>">
                              <?php the_title(); // titre du post ?>
                              <?php the_post_thumbnail(); ?>
                            </a>
                         </h2>
                         <div>
                                <?php 
                                        the_content(); // affichage de l'extrait 
                                ?>
                        </div>
                    
                    
                    </article>
                    <?php

                }

        }
        ?>
<?php

//chargement du fichier footer.php 
get_footer();