<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Theme_TP1
 */

use ParagonIE\Sodium\Core\Curve25519\H;

get_header();
?>

	<main id="primary" class="site-main">
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
            <?php
		if(is_front_page()) : ?>
				<section class="carrousel">
				<div><a href="http://localhost:8080/TP/category/image/">Imagerie 3D</a></div>
				<div><a href="http://localhost:8080/TP/category/cours/">Cours</a></div>
				<div><a href="http://localhost:8080/TP/category/jeu/">Jeu</a></div>
				<div><a href="http://localhost:8080/TP/category/specifique/">Spécifique</a></div>
				<div><a href="http://localhost:8080/TP/category/web/">Web</a></div>
				</section>
                <div style="display: flex; justify-content:center;">
				<button id='un'>I</button>
				<button id='deux'>C</button>
				<button id='trois'>J</button>
				<button id='quatre'>S</button>
				<button id='cinq'>W</button>
                </div>
				<?php endif ?>


					<section class="cours">
			<?php
			/* Start the Loop */
            $precedent = "XXXXXX";
			while ( have_posts() ) :
				the_post();
				$titre = get_the_title();
				//Session
                $sigle = substr($titre, 0, 7);
				$nb_Heure= substr($titre, -4,3);
				$titrePartiel=substr($titre,8,-6);
				$session=substr($titre,4,1);
				//$contenu = get_the_content();
				//$resume = substr($contenu,0,200);
				$typeCours = get_field('type_de_cours');
				//$desc = get_field_object('type_de_cours');
				if($typeCours != $precedent):
					if("XXXXXX" != $precedent):
			?>
					</section> 
					<?php endif ?>
					<h2 style="color:darkblue;"><?php echo $typeCours;
					?></h2>
					<h3 style="text-align: center;"><?php if($typeCours == "Web"){
						print "Contient des cours reliés au développement web";
					}
					else if($typeCours == "Spécifique"){
						print "Contient des cours spécifiques";
					}else if($typeCours == "Jeu"){
						print "Contient des cours reliés à la programmation de jeux, de création…";
					}else if($typeCours == "Imagerie 2D/3D"){
						print "Contient des cours reliés à la création d'objets";
					}; ?></h3>
					<section>
			<?php endif;?>

<article>
	<p> <?php echo $sigle . " - "?><b><?php echo $typeCours;?></b><?php echo " - " . $nb_Heure ; ?></p>
	<a href="<?php echo get_permalink() ?>"><?php echo $titrePartiel;?></a>
	<p>Session : <?php echo $session; ?></p>	
</article>
<p></p>
<?php 
$precedent = $typeCours;
endwhile; ?>    
			</section>
	<?php endif; ?>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
