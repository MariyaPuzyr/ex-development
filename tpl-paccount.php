<?php
if( !defined( 'ABSPATH')){ exit(); }

/*

Template Name: Affiliate program page template

*/

get_header();
?>

<div class="affiliate-wrap">
    <?php
    if (have_posts()) : ?>
        <?php while (have_posts()) : the_post();  ?>
            <h2><?php the_title() ?></h2>
            <?php the_content(); ?>
            <?php echo do_shortcode('[promotional_page]'); ?>

        <?php endwhile; ?>
    <?php endif; ?>

</div>
    <div class="clear"></div>

<?php get_footer();?>