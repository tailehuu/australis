<?php
/**
 * Template part for displaying post content
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage asiahandicraft
 * @since 1.0
 * @version 1.0
 */

?>

<div class="col-lg-4 col-sm-6">
    <a href="<?php the_post_thumbnail_url('full'); ?>"
       class="portfolio-box">
        <img src="<?php the_post_thumbnail_url(); ?>" class="img-responsive" alt="">

        <div class="portfolio-box-caption">
            <div class="portfolio-box-caption-content">
                <div class="project-category text-faded">
                    <?php the_title(); ?>
                </div>
                <div class="project-name">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </a>
</div>
