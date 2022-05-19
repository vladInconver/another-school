<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package another-school
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="icon" href="<?=_S_TMEME_URI ?>/img/logo.svg" type="image/svg+xml"> 
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php if ( is_front_page() && is_home() ) :
        $href = 'javascript:;';
    else :
        $href = esc_url( home_url( '/' ) );
    endif; ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'another-school' ); ?></a>

	<header id="masthead" class="site-header container-glob">
		<div class="header-buttons_line dis-f space-between">
            <a class="header-buttons_line-logo dis-f align-center" href="<?= $href ?>" rel="home">
                <img class="header-buttons_line-logo-icon" src="<?=_S_TMEME_URI ?>/img/logo.svg" alt="logo">
                <img class="header-buttons_line-logo-name" src="<?=_S_TMEME_URI ?>/img/site_name.svg" alt="site name">
            </a>
            <div class="header-buttons_line-buttons dis-f align-center">
                <div class="header-buttons_line-buttons-phone_desk mob-hide">
                    <a class="header-buttons_line-buttons-phone_num" href="tel:+74959709966">+7 (495) 970-99-66</a>
                    <a class="header-buttons_line-buttons-phone_text" href="javascript:;">Заказать обратный звонок</a>
                </div>
                <a class="header-buttons_line-buttons-phone_num" href="tel:+74959709966"><img class="header-buttons_line-buttons-phone desk-hide" src="<?=_S_TMEME_URI ?>/img/phone_icon.svg" alt="phone icon"></a>
                <a href="https://wa.me/79015893794?text=Hello world"><img class="header-buttons_line-buttons-whatsapp" src="<?=_S_TMEME_URI ?>/img/whatsapp_icon.svg" alt="whatsapp icon"></a>
                <a class="header-buttons_line-buttons-question mob-hide buttons-gradient" href="javascript:;">Задать вопрос о школе</a>
            </div>
		</div><!-- .site-branding -->
	</header><!-- #masthead -->
