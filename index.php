<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <h1><?php bloginfo( 'name' ); ?></h1>
    
    <h2><?php bloginfo( 'description' ); ?></h2>
    
    <?php
    
    if ( have_posts() ) :
        
        while ( have_posts() ) :
        
            the_post();
    
            the_title('<h3>', '</h3>');
        
            the_content();
        
        endwhile;
    
    endif; 
    
    wp_footer();

    ?>
</body>
</html>