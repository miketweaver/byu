<?php

get_header(); ?>
	
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">	
	<div id="feature">
			<?php echo get_new_royalslider(1); ?>
	</div>

	<div id="calendar">
			<h2>Calendar</h2>		
		
<?php				
	$rss = new DOMDocument();
	$rss->load('http://calendar.byu.edu/Rss/Export/7');
	$feed = array();
	foreach ($rss->getElementsByTagName('item') as $node) {
		$item = array ( 
			'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
			'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
			'link' => $node->getElementsByTagName('link')->item(0)->nodeValue
			);
		array_push($feed, $item);
	}
	$limit = 4;
	for($x=0;$x<$limit;$x++) {
		$title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
		$link = $feed[$x]['link'];
		$description = $feed[$x]['desc'];
		$description = explode('-',$description);
		if($title) {
			?>
				<div class="calendar-item">
					<div><?php echo $description[0]; ?></div>
					<span style="float:left; width:85%;margin-top: 9px;font-family:DINWeb-Bold;"><a href="<?php echo $link; ?>"><?php echo $title; ?></a></span>
				</div>
	<?php
		}
	}
?>
			
			<strong><a href="http://calendar.byu.edu/">Full Calendar</a></strong>
		</div>
	
	<div id="news">
		
			<h2>News</h2>
			<div id="news-container">
				
				<div class="news-item">
					<?php $query = new WP_Query( array( 'posts_per_page' => 1, 'offset' => 0 ) );
						
						while ($query->have_posts()) : $query->the_post();
							
							$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
							<div class="news-thumbnail"><img src="<?php echo $url; ?>"></div>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<p><?php echo get_the_excerpt();  ?></p>
						<?php endwhile;
							wp_reset_query();
						?>

				</div>

				<div class="news-item omega">
					<?php $query = new WP_Query( array( 'posts_per_page' => 1, 'offset' => 1 ) );
						
						while ($query->have_posts()) : $query->the_post();
							$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
							<div class="news-thumbnail"><img src="<?php echo $url; ?>"></div>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<p><?php echo get_the_excerpt();  ?></p>
						<?php endwhile;
							wp_reset_query();
						?>
				</div>
		</div>
			<strong><a href="#" class="baseline">Full News Page</a></strong>
		</div>
    </div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>