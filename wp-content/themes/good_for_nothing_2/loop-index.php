<div class="eight columns">
 
		<?php if ( is_home() ) { 
			echo do_shortcode('[orbit-slider category="homepage"]');
		} ?>

<!-- Skip Nav -->
<a id="content"></a>
	
	<?php if ( is_home() ) {
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	query_posts($query_string . '&cat=-25,-78,-82,-84&paged='.$paged);
	} ?>
	
	<!-- Start the Loop -->	
	<?php if ( have_posts() ) : ?>
		
		<!-- Open the first row -->
		<?php echo '<div class="row">'; ?>
		
		<!-- While loop to determine when to start new rows -->
		<?php $i = 0; while (have_posts()) : the_post(); $i++; ?>

		<!-- If this post is a multiple of 2, and not the first row, close the row and open the next -->
		<?php if ($i % 2 != 0 && $i != 1) { echo '</div><div class="row">'; } ?>
			
			
		<!-- Begin the first article -->
		<article class="six columns">
			
			<!-- Display the Post's category. -->
			<?php if ( is_home() ) { 
				$category = get_the_category(); 
				if($category[0]){
				echo '<span class="article-category"><a href="'.get_category_link($category[0]->term_id ).'" class="'.$category[0]->category_nicename.'">'.$category[0]->cat_name.'</a></span>';
				}
			}
			?>	
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