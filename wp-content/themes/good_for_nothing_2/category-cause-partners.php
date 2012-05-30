<?php get_header(); ?>

<div class="row">

	<div id="about-box" class="four columns push-eight">
		<h1>Cause partners</h1>
		<p>Good for Nothing works with grassroots social innovators, social enterprises, change makers, activists, film makers and charities who are positively disrupting the system with innovative and creative approaches to solving a social or environmental problem.</p>
		<p>Ideas and people who are re-imagining what ‘business’ and society can be like in the 21st century.</p>
		<p class="last">If that sounds like you and you have a mission you need help with please get in touch.</p>
		<div id="paper-background"><img src="<?php bloginfo( 'template_directory' ); ?>/images/about-box.png" /></div>
	</div>

	<div class="eight columns pull-four">
		<?php echo do_shortcode('[orbit-slider category="cause-partners"]'); ?>
	</div>

</div>

<div class="row">

<?php get_template_part( 'loop', 'category' ); ?>

<?php get_footer(); ?>