<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Theme_TP1
 */

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
				<button id='un'>1</button>
				<button id='deux'>2</button>
				<button id='trois'>3</button>
				<button id='quatre'>4</button>
				<button id='cinq'>5</button>
                </div>
				<?php endif ?>
			<?php
			/* Start the Loop */
            $precedent = 0;
			while ( have_posts() ) :
				the_post();

                $sigle = substr($titre, 0, 7);

                $nb_Heure= substr($titre, -4,3);
                $titrePartiel=substr($titre,8,-6);
                $titre = get_the_title();
                $session=substr($titre,4,1);
                //$contenu = get_the_content();
               // $resume=substr($contenu,0,200);
                $typeCours = get_field('type_de_cours');
			?>
<?php
// if($session != $precedent){
//     echo "<p>Session : " . $session . "</p>";
// }
// $precedent = $session;
?>
<article>
<p><?php echo $sigle . " - " . $typeCours; ?></p>
<a href="<?php echo get_permalink() ?>"><?php echo $titrePartiel;?></a>
<p>Session : <?php echo $session; ?></p>
</article>
<?php
			endwhile;

		endif;
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
