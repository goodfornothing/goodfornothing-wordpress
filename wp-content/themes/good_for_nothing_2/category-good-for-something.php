<?php get_header(); ?>

<div class="row">

	<div id="about-box" class="four columns push-eight">
		<h1>Good for Something</h1>
		<p>We bring brands and business together with relevant social innovators and enterprises creating experiential challenges, projects, ventures and relationships with benefits for all.</p>
		<p>Where business uses its skills, expertise, assets and know-how to accelerate new forms of enterprise.</p>
		<p>Good for collaboration, Good for new ways of working, Good for engagement, Good for innovation, Good for development and learning.</p>
		<p class="last">Good for Something.</p>
		<div id="paper-background"><img src="<?php bloginfo( 'template_directory' ); ?>/images/about-box.png" /></div>
	</div>

	<div class="eight columns pull-four">
		<?php echo do_shortcode('[orbit-slider category="good-for-something"]'); ?>
	</div>

</div>

<div class="row">

<?php get_template_part( 'loop', 'category' ); ?>

<?php get_footer(); ?>