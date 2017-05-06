<?php
/**
 * Template part for displaying projects category for home page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage naturewealth
 * @since 1.0
 * @version 1.0
 */

?>

<section class="no-padding" id="portfolio">
    <div class="container-fluid">
        <div class="row no-gutter popup-gallery">
            <?php
            global $post;
            $args = array(
                'posts_per_page' => 6,
                'offset' => 1,
                'category' => 4,
                'nopaging' => true
            );
            $myposts = get_posts($args);
            foreach ($myposts as $post) : setup_postdata($post); ?>
                <?php get_template_part('template-parts/portfolio/portfolio', 'item'); ?>
            <?php endforeach;
            wp_reset_postdata(); ?>
        </div>
    </div>
</section>