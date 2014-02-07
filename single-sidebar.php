<?php
/*
Single Post Template: One Sidebar 
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<ul class="breadcrumb">
        		<li>
          			<div class="dropdown"><a href="" data-toggle="dropdown" class="home dropdown-toggle needsclick"><i class="icon-home icon-large"></i><span class="visuallyhidden">Home</span><i class="icon-caret-down"></i></a>
            			<ul class="dropdown-menu">
              				<li><a href="www.byu.edu">BYU Home</a></li>
              				<li><a href="#"><?php echo get_bloginfo('name'); ?> Home</a></li>
              				<li><a href="#">Two Pages Above</a></li>
            			</ul><i class="divider icon-angle-right"></i>
          			</div>
        		</li>
        		<li><a href="#">One page above</a><i class="divider icon-angle-right"></i></li>
        		<li class="active">Current Page</li>
      		</ul>
			<?php while ( have_posts() ) : the_post(); ?>

			<div id="content-one-sidebar" role="main" class="wrapper clearfix one-sidebar">
      			<header>
        			<h1><?php the_title(); ?></h1>
        			<h2><?php the_excerpt(); ?></h2>
      			</header>
      			<main id="main-content">
        			<?php the_content(); ?>
      			</main>
      			<aside class="sidebar">
        			<?php get_sidebar(); ?>
      			</aside>
    		</div>
						
			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>