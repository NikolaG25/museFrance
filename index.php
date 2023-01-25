<?php get_header(); ?>

<main class="archiveArticle">
<h1 class="siteHeading">
    Actualités
	</h1>
    <div class="listArticle">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="cardArticle">
                    <?php the_post_thumbnail(); ?>
                    <div class="backgroundBlack"></div>
                    <div class="infosArticle">
                        <h3 class="title">
                            <?php the_title(); ?>
                        </h3>
                    </div>
                </a>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>

</main>

<?php get_footer(); ?>