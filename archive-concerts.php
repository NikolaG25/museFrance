<?php get_header(); ?>



<main class="siteConcert">
	<h1 class="siteHeading">
	Concerts du groupe
	</h1>
	<div class="concertContainer">

		<?php if (have_posts()):
			while (have_posts()):
				the_post(); ?>
				<a class="cardConcert" target="_blank" href="<?php the_field('lien_billeterie'); ?>">
					<?php the_post_thumbnail(); ?>
					<div class="backgroundBlack"></div>
					<div class="infosConcert">
						<h3 class="title">
						<?php the_title(); ?>
						</h3>
					<div class="separation"></div>
					<p><?php the_field('date'); ?></p>
					</div>
					<div class="buttonConcert">
						<h3 class=title>Billetterie</h3>
					</div>
					
				</a>
			<?php endwhile; endif; ?>
	</div>

</main>
<?php get_footer(); ?>