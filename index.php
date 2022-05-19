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
                <div class="site-main_hero-title title-block">Начальная онлайн-школа с акцентом на Soft skills и здоровье ребенка</div>
                <div class="site-main_hero-text text-block">Начался набор на 2022/23 учебный год со скидкой 30%</div>
                <a class="site-main_hero-button buttons-gradient" href="javascript:;">Узнать подробнее о школе</a>
            </div>
        </div>
        <img class="decoration-elips purple-top-right mob-hide" src="<?=_S_TMEME_URI ?>/img/right-elips-purple.svg" alt="decoration elips purple">
        <div class="benefits-section">
            <div class="dark-section">
                <img class="decoration-elips purple-dark-left mob-hide" src="<?=_S_TMEME_URI ?>/img/left-elips-purple-dark.svg" alt="decoration elips purple">
                <div class="container-glob">
                    <div class="dark-section-title title-block">Ребенку нравится учиться</div>
                    <div class="dark-section-text text-block">Благодаря совокупности методик школьник  с удовольствием занимается каждый день</div>
                </div>
                <img class="decoration-elips purple-dark-right mob-hide" src="<?=_S_TMEME_URI ?>/img/right-elips-purple-dark.svg" alt="decoration elips purple">
            </div>
            <div class="benefits-section_content container-glob">
                <div class="benefits-section_title title-block">Что приобретет школьник во время обучения в «Другой школе»</div>
                <div class="benefits-section_list-wrapper">
                    <div class="dis-f align-center benefits-section_list-item">
                        <div class="benefits-section_list-counter">01</div>
                        <div class="benefits-section_list-text text-block">Искреннее желание учиться</div>
                    </div>
                    <div class="dis-f align-center benefits-section_list-item">
                        <div class="benefits-section_list-counter">02</div>
                        <div class="benefits-section_list-text text-block">Критическое и творческое мышление</div>
                    </div>
                    <div class="dis-f align-center benefits-section_list-item">
                        <div class="benefits-section_list-counter">03</div>
                        <div class="benefits-section_list-text text-block">Умение применять и демонстрировать знания на экзаменах и в жизни</div>
                    </div>
                    <div class="dis-f align-center benefits-section_list-item">
                        <div class="benefits-section_list-counter">04</div>
                        <div class="benefits-section_list-text text-block">Умение совершать осознанный выбор</div>
                    </div>
                    <div class="dis-f align-center benefits-section_list-item">
                        <div class="benefits-section_list-counter">05</div>
                        <div class="benefits-section_list-text text-block">Умение доводить дело до конца</div>
                    </div>
                    <div class="dis-f align-center benefits-section_list-item">
                        <div class="benefits-section_list-counter">06</div>
                        <div class="benefits-section_list-text text-block">Умение аргументировать свою позицию</div>
                    </div>
                    <div class="dis-f align-center benefits-section_list-item">
                        <div class="benefits-section_list-counter">07</div>
                        <div class="benefits-section_list-text text-block">Высокий уровень эмоциональной грамотности</div>
                    </div>
                </div>
            </div>
            <div class="container-glob">
                <div class="form-section">
                        <div class="first-form-image"></div>
                        <div class="form-section-content">
                            <div class="form-section-title title-block">Узнайте подробнее - ? </div>
                            <div class="form-section-text text-block">Узнайте подробнее о записи на 2022/23 учебный год с максимальными скидками</div>
                            <div class="form-section_form-wrapper">
                                <?= do_shortcode('[contact-form-7 id="5" title="Primary Form"]') ?>
                            </div>
                        </div>
                </div>
            </div>
        </div>




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
