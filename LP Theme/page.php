<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fools_Gold
 */

get_header();
?>

	<div id="primary" class="content-area">
		
		<div class="coming-soon-container">
			<p> Coming Soon </p>
		</div>

		<div class="main-logo--container">
			<img src = '<?php bloginfo('template_directory'); ?>/img/FG_Main_Logo_LP.svg' alt = 'Picture' />
		</div>

		<div class="tagline"> 
			<h6> Coming to a browser near you Dec 1st <span class="link"> <a href="http://eepurl.com/gJc3Nj" > Sign up to be on our Mailing List! We'll email you when new articles are on the site. </a> </span>  </h6>
		</div>

		<!-- start gems -->
		<div class="gem gem-01"> <img src = '<?php bloginfo('template_directory'); ?>/img/gems/gem-01.svg' alt = 'Picture' /></div>
		<div class="gem gem-02"> <img src = '<?php bloginfo('template_directory'); ?>/img/gems/gem-02.svg' alt = 'Picture' /></div>
		<div class="gem gem-03"> <img src = '<?php bloginfo('template_directory'); ?>/img/gems/gem-03.svg' alt = 'Picture' /></div>
		<div class="gem gem-04"> <img src = '<?php bloginfo('template_directory'); ?>/img/gems/gem-04.svg' alt = 'Picture' /></div>
		<div class="gem gem-05"> <img src = '<?php bloginfo('template_directory'); ?>/img/gems/gem-05.svg' alt = 'Picture' /></div>
		<div class="gem gem-06"> <img src = '<?php bloginfo('template_directory'); ?>/img/gems/gem-06.svg' alt = 'Picture' /></div>
		<div class="gem gem-07"> <img src = '<?php bloginfo('template_directory'); ?>/img/gems/gem-07.svg' alt = 'Picture' /></div>
		<div class="gem gem-08"> <img src = '<?php bloginfo('template_directory'); ?>/img/gems/gem-08.svg' alt = 'Picture' /></div>
		<div class="gem gem-09"> <img src = '<?php bloginfo('template_directory'); ?>/img/gems/gem-09.svg' alt = 'Picture' /></div>
		<div class="gem gem-10"> <img src = '<?php bloginfo('template_directory'); ?>/img/gems/gem-10.svg' alt = 'Picture' /></div>
		<div class="gem gem-13"> <img src = '<?php bloginfo('template_directory'); ?>/img/gems/gem-13.svg' alt = 'Picture' /></div>
		<div class="gem gem-11"> <img src = '<?php bloginfo('template_directory'); ?>/img/gems/gem-11.svg' alt = 'Picture' /></div>
		<div class="gem gem-12"> <img src = '<?php bloginfo('template_directory'); ?>/img/gems/gem-12.svg' alt = 'Picture' /></div>
	


	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
