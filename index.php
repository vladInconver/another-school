<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package another-school
 */

get_header();
?>
    <img class="decoration-elips purple-top-left mob-hide" src="<?=_S_TMEME_URI ?>/img/left-elips-purple.svg" alt="decoration elips purple">
    <main id="primary" class="site-main">
        <div class="site-main_hero container-glob">
            <div class="hero-image"></div>
            <div class="site-main_hero-content">
                <div class="site-main_hero-title">Начальная онлайн-школа с акцентом на Soft skills и здоровье ребенка</div>
                <div class="site-main_hero-text">Начался набор на 2022/23 учебный год со скидкой 30%</div>
                <a class="site-main_hero-button buttons-gradient" href="javascript:;">Узнать подробнее о школе</a>
            </div>
        </div>
        <img class="decoration-elips purple-top-right mob-hide" src="<?=_S_TMEME_URI ?>/img/right-elips-purple.svg" alt="decoration elips purple">





        <?php
		if ( have_posts() ) :

			while ( have_posts() ) :
				the_post();
                //get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			//the_posts_navigation();

		else :

			//get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
