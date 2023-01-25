<?php get_header(); ?>



<main class="mainAlbums">
	<h1 class="siteHeading">
	Discographie du groupe
	</h1>
	<div class="albumsContainer">

		<?php if (have_posts()):
			while (have_posts()):
				the_post(); ?>
				<a class="cardAlbum" href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail(); ?>
					<div class="backgroundBlack"></div>
					<div class="infosAlbumCard">
						<h3 class="title">
							<?php the_title(); ?>
						</h3>
					</div>

				</a>
			<?php endwhile; endif; ?>
	</div>

</main>

<?php get_footer(); ?>