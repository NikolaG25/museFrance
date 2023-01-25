<?php get_header(); ?>



<main class="siteBiographie">
	<h1 class="siteHeading">
	Biographie du groupe
	</h1>
	<div class="cardContainer">

		<?php if (have_posts()):
			while (have_posts()):
				the_post(); ?>
				<a class="card" href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail(); ?>
					<h3 class="title">
						<?php the_title(); ?>
					</h3>
				</a>
			<?php endwhile; endif; ?>
	</div>

</main>

<?php the_posts_pagination(); ?>
<?php get_footer(); ?>