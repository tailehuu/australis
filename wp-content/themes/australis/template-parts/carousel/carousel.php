<?php
/**
 * Template part for displaying Carousel
 *
 * @package WordPress
 * @subpackage australis
 * @since 1.0
 * @version 1.0
 */

?>
<header id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for Slides -->
    <div class="carousel-inner">
        <div class="item active">
            <!-- Set the first background image using inline CSS below. -->
            <div class="fill" style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/images/header/au1.jpg');"></div>
            <div class="carousel-caption">
                <h2>Multivitamin</h2>
            </div>
        </div>
        <div class="item">
            <!-- Set the second background image using inline CSS below. -->
            <div class="fill" style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/images/header/au2.jpg');"></div>
            <div class="carousel-caption">
                <h2>Fruits</h2>
            </div>
        </div>
        <div class="item">
            <!-- Set the third background image using inline CSS below. -->
            <div class="fill" style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/images/header/au3.jpeg');"></div>
            <div class="carousel-caption">
                <h2>Flowers</h2>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>

</header>