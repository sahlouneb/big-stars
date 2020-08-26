<?php

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
                    
                    
                    </article>
                    <?php

                }

        }

//chargement du fichier footer.php 
get_footer();