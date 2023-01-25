<?php get_header(); ?>

    <div class="firstScreen">
        <div class="firstScreen__overlay">
            <?php
                $image = get_field('logo_intro');
                if($image):
            ?>
           <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="firstScreen__logo">
           <?php endif; ?>

        </div>

        <?php
            $video = get_field('video_intro');
            if($video):
        ?>
            <video src="<?php echo $video['url'];?>" class="firstScreen__video" autoplay loop muted></video>
        <?php endif; ?>
    </div>
<main> 
    <div class="actusFront">
        <h1>Actualités</h1>
        <div class="listActuFront">
            <?php 
                $args = array(
                    'numberposts' => 3,
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'post_type' => 'post',
                    'post_status' => 'publish'
                );
                $recent_posts = get_posts($args);
                foreach($recent_posts as $post) :
                    setup_postdata( $post ); 
            ?>
            <div class="actuFront">
                <?php the_post_thumbnail(); ?>
                <h2><?php the_title(); ?></h2>
                <p><?php the_excerpt(  ) ?></p>
                <a class="seeMoreActu" href="<?php the_permalink(); ?> ?>">Voir plus</a>

            </div>
            <?php
                endforeach;
                wp_reset_postdata(  );
            ?>
        </div>
    </div>

    <div class="concertsFront">
        <h1>Prochains concerts</h1>
        <div class="listConcertsFront">
            <?php 
                $args = array(
                    'numberposts' => 4,
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'post_type' => 'concerts',
                    'post_status' => 'publish'
                );
                $recent_posts = get_posts($args);
                foreach($recent_posts as $post) :
                    setup_postdata( $post ); 
            ?>
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
            <?php
                endforeach;
                wp_reset_postdata(  );
            ?>
        </div>
    </div>

    <div class="liensFront">
        <?php 
            $zoneLienGauche = get_field('zone_lien_gauche');
            $zoneLienDroite = get_field('zone_lien_droite');
        ?>
        <a href="<?php echo $zoneLienGauche['lien_page_gauche'] ?>" class="lienFront lienGauche">
            <img src="<?php echo $zoneLienGauche['image_fond_gauche']['url'] ?>" alt="" class="fondGauche">
            <div class="backgroundBlack"></div>
            <div class="infosLienCard">
                <h2 class="title"><?php echo $zoneLienGauche['libelle_lien_gauche'] ?></h2>
            </div>
        </a>        
        <a href="<?php echo $zoneLienDroite['lien_page_droite'] ?>" class="lienFront lienDroite">
            <img src="<?php echo $zoneLienDroite['image_fond_droite']['url'] ?>" alt="" class="fondDroite">
            <div class="backgroundBlack"></div>
            <div class="infosLienCard">
                <h2><?php echo $zoneLienDroite['libelle_lien_droite'] ?></h2>
            </div>

        </a>
        
    </div>

</main>
<?php get_footer(); ?>
