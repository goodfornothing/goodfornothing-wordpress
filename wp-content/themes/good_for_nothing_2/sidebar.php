<!-- sidebar -->
<aside class="four columns">
	
	<ul>
		<?php echo SimplePieWP('http://goodfornoth.ning.com/activity/log/list?fmt=rss'); ?>
		<div id="paper-background"><img src="<?php bloginfo( 'template_directory' ); ?>/images/ning-box.png" /></div>
		<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Right Sidebar')) : ?>
		<li><h4>Hey! You!</h4></li>
		<li>You should like, so test out this dynamic sidebar. Check it out in Appearance > Widgets!</li>
		<?php endif; ?>
	</ul>

<?php 
/*	
	<audio id="beep-one" controls="controls" preload="auto" style="display:none;">
		<source src="<?php bloginfo( 'template_directory' ); ?>/audio/FORSBWU.mp3"></source>
		<source src="<?php bloginfo( 'template_directory' ); ?>/audio/FORSBWU.ogg"></source>
		Your browser isn't invited for super fun time.
	</audio>
	
	<script>
	var beepOne = jQuery("#beep-one")[0];
	jQuery("#text-2 a")
		.mouseenter(function() {
			beepOne.play();
		});
	</script>
*/
?>
</aside>
<!-- sidebar -->
