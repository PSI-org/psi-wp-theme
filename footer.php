<?php
/**
 * Created by PhpStorm.
 * User: starstryder
 * Date: 7/10/19
 * Time: 12:51 PM
 */
?>

<div id="footer">
    <div class="container">
        <div class="left" style="width: 20%;">
            <?php dynamic_sidebar( 'footer_left' ); ?>
            <div id="footer-menu"><?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?></div>
        </div>

        <div class="middle" style="width: 60%">
            <?php dynamic_sidebar( 'footer_middle' ); ?>
        </div>
        <div class="right" style="width:20%">
            <?php dynamic_sidebar( 'footer_right' ); ?>
        </div>
    </div>
    <div style="clear: both;"></div>
</div>
