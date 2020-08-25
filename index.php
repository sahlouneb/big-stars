<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
           if (have_posts()) {
                
                while(have_posts())
                {
                    the_post();



                }

           }
           else {
               echo "contenu indisponible";
               
           }
           

?>

    
</body>
</html>






