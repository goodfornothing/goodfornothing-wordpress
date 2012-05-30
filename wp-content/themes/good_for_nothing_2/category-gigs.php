<?php get_header(); ?>

<div class="row">

	<div id="about-box" class="four columns push-eight">
		<h1>Gigs</h1>
		<p>Gigs is how GFN started</p>
		<p>They continue to be at the heart of what we do</p>
		<p>24 to 48 hour experiences</p>
		<p>Fast track making, doing and rapid prototyping</p>
		<p>Building community through demanding common tasks</p>
		<p>With music, food and laughs</p>
		<p>Creative collaboration meets rave</p>
		<p>Real people, working on real challenges, together</p>
		<p class="last">Self organising since 2010</p>
		<div id="paper-background"><img src="<?php bloginfo( 'template_directory' ); ?>/images/about-box.png" /></div>
	</div>

	<div class="eight columns pull-four">
		<?php echo do_shortcode('[orbit-slider category="gigs"]'); ?>
	</div>

</div>

<div class="row">

<?php get_template_part( 'loop', 'category' ); ?>

<?php get_footer(); ?>