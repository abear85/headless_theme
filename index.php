<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
</head>
<body>

    <div id="content">
        <h3>This. Is. It.</h3>
        <p>Teams JSON: /wp-json/wp/v2/teams</p>
        <p>Players JSON: /wp-json/wp/v2/players</p>
        <p>Seasons JSON: /wp-json/wp/v2/seasons</p>
        <p>Best Albums JSON /wp-json/wp/v2/albums<em>?filter[category_name]=best-of-2017 <strong>plugin needs to be activated before this works</strong></em></p>
        <?php
        // if ( have_posts() ) :
        //     if ( is_home() && ! is_front_page() ) {
        //         echo '<h1>' . single_post_title( '', false ) . '</h1>';
        //     }
        //     while ( have_posts() ) : the_post();
        //         if ( is_singular() ) {
        //             the_title( '<h1>', '</h1>' );
        //         } else {
        //             the_title( '<h2><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );
        //         }
        //         the_content();
        //     endwhile;
        // endif;
        ?>
    </div>

    <div id="app"></div>

    <?php wp_footer(); ?>

</body>
</html>