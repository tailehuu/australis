<?php
/**
 * Home template
 *
 * @package WordPress
 * @subpackage naturewealth
 * @since 1.0
 * @version 1.0
 */

?>

<!-- header -->
<?php get_header(); ?>

<div class='share-on-blog' style='margin: 2px;vertical-align: top; font-size: 14px; font-family: arial; color: #000; max-width:300px;padding: 20px;border: 1px solid #f5f5f5; text-align: center; display: block;margin: 5px auto;'>
    <a href="http://www.blurb.com/bookshare/app/index.html?bookId=7877797" data-bindattr-36="36" target='_blank'>
        <img src="http://www.blurb.com/images/uploads2/catalog/007/416/383/8507697-dae5397fefd6981a9e3bccf9e332ebd1.jpg" data-bindattr-37="37" alt='' style='max-height:300px; max-width:300px;border:0;zoom: 50%;box-shadow: 3px 3px 10px 1px #999;' />
    </a>
    <p style='margin: 5px;'><a target='_blank' style='text-decoration: none; font-size: 18px; color: #00c0be; text-transform: uppercase; border-bottom: 0;'><script id='metamorph-266-start' type='text/x-placeholder'></script>java code convention<script id='metamorph-266-end' type='text/x-placeholder'></script></a></p>
    <p style='margin: 5px;'>By <a style='text-decoration: none; color: #00c0be; order-bottom: 0;'><script id='metamorph-267-start' type='text/x-placeholder'></script>Tai LE<script id='metamorph-267-end' type='text/x-placeholder'></script></a></p>
</div>

<!-- about -->
<?php get_template_part('about'); ?>

<!-- services -->
<?php get_template_part('services'); ?>

<!-- portfolio -->
<?php get_template_part('template-parts/portfolio/portfolio'); ?>

<!-- Map -->
<?php get_template_part('map'); ?>

<!-- footer -->
<?php get_footer(); ?>
