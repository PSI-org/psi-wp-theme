<?php
/* Template Name: Events */

get_header();

?>

    <div class="container">
        <div id="full-width" class="left">


                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <h2 class="post-title"><?php the_title(); ?></h2>
                    <?php the_content(); ?>

                <?php endwhile; else: ?>
                    <?php _e('Sorry, no posts matched your criteria.'); ?>
                <?php endif; ?>

        </div>

    </div>
    <div style="clear:both;"></div>

<?php
get_footer();
