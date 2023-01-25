<?php get_header(); ?>



<main class="singleBiographie">
	<h1 class="siteHeading">
    <?php the_title(); ?>
	</h1>
    <img src="<?php echo get_template_directory_uri(); ?>/img/maskMuse.svg" alt="" class="maskMuse">
    <div class="content">
        <?php
        if (have_posts()) :
        while (have_posts()) : the_post();
            the_content();
        endwhile;
        endif;
        ?>
    </div>

	<div class="bioNavigation">

	    <div class="bioNavigationPrev">
		    <?php next_post_link( '%link' ); ?>
        </div>

            <div class="bioNavigationNext">
                <?php previous_post_link( '%link' ); ?>
            </div>

    </div>
</main>

<?php the_posts_pagination(); ?>
<?php get_footer(); ?>