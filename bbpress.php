<?php 
/*
Template Name: bbPress
*/ 
?>

<?php get_header(); ?>



<main class="forumPage">
	<h1 class="siteHeading">
    <?php the_title(); ?>
	</h1>
    <img src="<?php echo get_template_directory_uri(); ?>/img/maskMuse.svg" alt="" class="maskMuse">
    <div class="contentForum">
        <?php
        if (have_posts()) :
        while (have_posts()) : the_post();
            the_content();
        endwhile;
        endif;
        ?>  
        <h2>Pas de compte ?</h2>
        <button class="inscription"><a href="http://localhost/museFrance/registration/" target="_blank" rel="noopener noreferrer">Créer un compte</a></button>

    </div>

</main>

<?php get_footer(); ?>