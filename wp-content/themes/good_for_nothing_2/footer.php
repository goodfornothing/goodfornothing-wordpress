
	</div>
	<!-- Main Row -->	

	
	</div>
	<!-- container -->
	
	<div>
		<div class="row">
			<div class="twelve columns" id="footer-top">
				&nbsp;
			</div>
		</div>
	</div>
	
	<div id="footer-container" class="container">	
		<!-- Footer -->
		<footer class="row">

			<div class="row">
		
				<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Sidebar')) : ?>
				<h4>Hey! You!</h4>
				<p>You should like, so test out this dynamic footer sidebar. Check it out in Appearance > Widgets!</p>
				<?php endif; ?>
			
			</div>
			
			<div class="row">
				<div class="searchbox"><?php get_search_form(); ?></div>
			</div>
	
		</footer>
		<!-- Footer -->
	</div>

	<div id="footer-container-2" class="container">	
		<div class="row">
		<p>Good for Nothing – Bringing smart folk together to do some good for nothing</p>
	
		<div id="pipeline-p"><a href="http://pipelineproject.co/"><img src="<?php bloginfo( 'template_directory' ); ?>/images/pipeline-p.png"/></a></div>
		</div>
	
	</div>
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-32250261-1']);
	  _gaq.push(['_setDomainName', 'goodfornothing.com']);
	  _gaq.push(['_setAllowLinker', true]);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>

	<!-- Included JS Files -->	
	<script src="<?php bloginfo('template_url'); ?>/javascripts/foundation.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/javascripts/orbit-1.3.0.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/javascripts/app.js"></script>

	<?php wp_footer(); ?>
	
</body>
</html>