<?php get_header(); ?>



<main class="mainePage">
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

</main>

<?php the_posts_pagination(); ?>
<?php get_footer(); ?>