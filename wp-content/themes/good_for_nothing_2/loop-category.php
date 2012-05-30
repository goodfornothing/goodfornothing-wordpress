<div class="twelve columns">

<!-- Skip Nav -->
<a id="content"></a>
	
	<!-- Start the Loop -->	
	<?php if ( have_posts() ) : ?>
		
		<!-- Open the first row -->
		<?php echo '<div class="row">'; ?>
		
		<!-- While loop to determine when to start new rows -->
		<?php $i = 2; while (have_posts()) : the_post(); $i++; ?>
		<!-- If this post is a multiple of 3, and not the first row, close the row and open the next -->
		<?php if ($i % 3 == 0 && $i != 3) { echo '</div><div class="row">'; } ?>
			
			
		<!-- Begin the first article -->
		<article class="four columns <?php echo $i;?>">
			
			<!-- Display the Title as a link to the Post's permalink. -->
			<h1 class="post-title">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
			</h1>
			<div class="post-date"><?php the_time('d.m.y'); ?></div>

			<a href ="<?php the_permalink(); ?>" class="post-thumbnail">
				<?php 
				if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
					the_post_thumbnail('thumbnail'); 				
				} else { ?>
				<img width="310" height="206" title="Good for Nothing Bird" alt="Good for Nothing Bird" class="attachment-thumbnail wp-post-image" src="<?php bloginfo( 'template_directory' ); ?>/images/default-thumb.png">
				<?php } ?>
			</a>
			
			<div class="post-excerpt"><?php the_excerpt(); ?></div>

			<div class="post-meta">
				<ul>
					<li>Posted by <?php the_author(); ?></li>
					<li><?php comments_popup_link('0 Comments', '1 Comment', '% Comments'); ?></li>
				</ul>
			</div>
			<?php comments_template( '', true ); ?>
		
		</article>
		
		<!-- Closes the first article -->
	
	<!-- Stop The Loop (but note the "else:" - see next line). -->
	<?php endwhile; ?>
	
	<?php echo '</div>'; ?>
	
	<?php else: ?>
	
		<!-- The very first "if" tested to see if there were any Posts to -->
		<!-- display.  This "else" part tells what do if there weren't any. -->
		<p>Sorry, no posts matched your criteria.</p>
	
	<!--End the loop -->
	<?php endif; ?>
	
	<!-- Begin Pagination -->
	<?php if (function_exists("emm_paginate")) {
	    emm_paginate();
	} ?>	        	
	<!-- End Pagination -->

</div>