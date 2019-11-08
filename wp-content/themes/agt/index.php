<?php
get_header();
?>

<?php
if ( have_posts() ) :

    if ( is_home() && ! is_front_page() ) : ?>
        <header>cvsff
            <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
        </header>

    <?php
    endif;

    /* Start the Loop */
    while ( have_posts() ) : the_post();

        get_template_part( 'template-parts/content', get_post_format() );

    endwhile;

    the_posts_navigation();

else :

        

endif; ?>

<?php
get_sidebar();
get_footer();
