<?php get_header(); ?>



<main class="singleAlbums">
	<h1 class="siteHeading">
    <?php the_title(); ?>
	</h1>
    <div class="content">
        <div class="infosAlbum">
            <div class="coverMainInfos">
                <?php the_post_thumbnail(); ?>
                <div class="albumInfos">
                    <?php 
                        $dateSortieAlbum = get_field('date_sortie');
                        $designer = get_field('designer_cover');
                        $compoAlbum = get_field('compositeurs');
                        $producteursAlbum = get_field('producteurs')
                    ?>
                     <?php if($dateSortieAlbum): ?>
                        <p class="dateSortie">Date de sortie : <?php echo $dateSortieAlbum ?></p>
                    <?php endif; ?>      
                    <?php if($designer): ?>
                        <p class="artwork">Artwork : <?php echo $designer ?></p>
                    <?php endif; ?>                    
                    <?php if($compoAlbum): ?>
                        <p class="compoAlbum">Compositeurs : <?php echo $compoAlbum ?></p>
                    <?php endif; ?>                    
                    <?php if($producteursAlbum): ?>
                        <p class="prodAlbum">Producteurs : <?php echo $producteursAlbum ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="albumContent content">
                <?php the_content(); ?>
            </div>
        </div>
        <div class="tracklist">            
            <iframe class="iframeSpotify" src="<?php the_field( 'lien_spotify' ); ?>" width="800" height="380" frameborder="0" allowtransparency="true"></iframe>
            <div class="infosTracklist">
                <div class="morceauxTitle cardContainer">
                    <?php 
                    if (have_rows('morceau')):
                        while(have_rows('morceau')) : the_row();
                            $nom = get_sub_field('nom_morceau');
                    ?>
                    <h2 class="morceau_title card clickHide"><?php echo $nom ?></h2>

                        <?php endwhile; ?>
                    <?php endif; ?>   
                </div>
            
                <div class="morceauxDesc">
                    <?php 
                    if (have_rows('morceau')):
                        while(have_rows('morceau')) : the_row();
                            $desc = get_sub_field('description_morceau');
                            $date = get_sub_field('date_enregistrement');
                            $compo = get_sub_field('compositeur');
                            $prod = get_sub_field('producteur');
                            $nombr_perfo = get_sub_field('nombre_performance');
                            $date_dern_perfo = get_sub_field('date_derniere_perfomance');
                    ?>
                    <div class="morceau_desc hideElement">
                        <?php if($date): ?>
                            <p class="dateEnr">Date d'enregistrement : <?php echo $date ?></p>
                        <?php endif; ?>

                        <?php if($compo): ?>
                            <p class="compo">Compositeur : <?php echo $compo ?></p>
                        <?php endif; ?>

                        <?php if($prod): ?>
                            <p class="prod">Producteur : <?php echo $prod ?></p>
                        <?php endif; ?>

                        <?php if($nombr_perfo): ?>
                            <p class="nbrPerf">Nombre de performance : <?php echo $nombr_perfo ?></p>
                        <?php endif; ?>

                        <?php if($date_dern_perfo): ?>
                            <p class="datePerf">Dernière performance : <?php echo $date_dern_perfo ?></p>
                        <?php endif; ?>

                        <?php if($desc): ?>
                            <?php echo $desc ?>
                        <?php endif; ?>

                    </div>

                        <?php endwhile; ?>
                    <?php endif; ?>    
                </div>
            </div>

            
        </div>
        
   
    </div>
    

</main>

<?php get_footer(); ?>