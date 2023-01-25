<?php get_header(); ?>

<main class="membresEquipe">
    <h1 class="siteHeading">
        Les membres de l'équipes
    </h1>   

    <div class="cardContainer membersContainer">
        <?php 
            if (have_posts()):
                while (have_posts()):
                    the_post();
        ?>
        <div class="card cardMember clickHide">
					<?php the_post_thumbnail(); ?>
					<h3 class="title">
						<?php the_title(); ?>
					</h3>
				</div>
			<?php endwhile; endif; ?>
    </div>

    <div class="descMembres">

        <?php 
            if (have_posts()):
                while (have_posts()):
                    the_post();
        ?>
        <div class="descMembre hideElement">
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
        </div>
        <?php endwhile; endif; ?>
    </div>
</main>

<?php get_footer(); ?>
