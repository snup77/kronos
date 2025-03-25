<?php get_header(); ?>
<h2><?php the_archive_title(); ?></h2>

<?php 
    while(have_posts()) {
        the_post(); ?>
        <div>
            <h3><?php the_title(); ?></h3>
            <div>
                <?php the_content(); ?>
            </div>
        </div>
    <?php }
?>

<?php get_footer(); ?>