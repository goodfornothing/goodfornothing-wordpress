<?php get_header(); ?>

<div class="row">

	<div id="about-box" class="four columns push-eight">
		<h1>Nothing works</h1>
		<ul>
			<li>Self organizing, experimenting and collaborating to solve creative challenges works.</li>
			<li>Learning through doing works.</li>
			<li>48 hrs to crack a brief works.</li>
			<li>Introducing Nothing Works.</li>
			<li>The same GFN approach.</li>
			<li>Live briefs - not for profit or for profit with purpose.</li>
			<li>The organisation funds the session.</li>
			<li>Skilled community members are paid for their efforts.</li>
			<li>Fun, fast, better, cheaper.</li>
		</ul>
		<div id="paper-background"><img src="<?php bloginfo( 'template_directory' ); ?>/images/about-box.png" /></div>
	</div>

	<div class="eight columns pull-for">
		<?php echo do_shortcode('[orbit-slider category="nothing-works"]'); ?>
	</div>



</div>

<div class="row">

<?php get_template_part( 'loop', 'category' ); ?>

<?php get_footer(); ?>