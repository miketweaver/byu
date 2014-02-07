<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package byu-responsive
 */
?>

	</div><!-- #content -->

	<footer id="page-footer" role="contentinfo">
		<!-- footer widget links -->
		<div id="footer-links">
			<div class="wrapper">			
				<?php if ( is_active_sidebar( 'footer-sidebar-1' ) ) : ?>
					<div class="col alpha">
						<?php dynamic_sidebar( 'footer-sidebar-1' ); ?>
					</div>
				<?php endif; ?>	
			
				<?php if ( is_active_sidebar( 'footer-sidebar-2' ) ) : ?>
						<div class="col">
							<?php dynamic_sidebar( 'footer-sidebar-2' ); ?>
						</div>
				<?php endif; ?>	
			
				<?php if ( is_active_sidebar( 'footer-sidebar-3' ) ) : ?>
						<div class="col">	
							<?php dynamic_sidebar( 'footer-sidebar-3' ); ?>
						</div>
				<?php endif; ?>
			
				<?php if ( is_active_sidebar( 'footer-sidebar-4' ) ) : ?>
					<div class="col">	
						<?php dynamic_sidebar( 'footer-sidebar-4' ); ?>
					</div>
				<?php endif; ?>
			
				<?php if ( is_active_sidebar( 'footer-sidebar-5' ) ) : ?>
					<div class="col omega">	
						<?php dynamic_sidebar( 'footer-sidebar-5' ); ?>
					</div>
				<?php endif; ?>
			</div><!--#wrapper -->
		</div><!-- #footer-links -->
			
		<!-- Other lds schools and church website -->		
		<div id="footer-bottom">
			<div class="wrapper clearfix">
				<!--a#byu(href='http://byu.edu/') Brigham Young University-->
    			<a id="byui" href="http://byui.edu/" class="ir">BYU-Idaho</a>
    			<a id="byuh" href="http://byuh.edu/" class="ir">BYU-Hawaii</a>
     			<a id="ldsbc" href="http://www.ldsbc.edu/" class="ir">LDS Business College</a>
    			<a id="lds" href="http://lds.org/">The Church of Jesus Christ of Latter-day Saints</a>
    		</div>
        </div>	
        
	</footer><!-- #page-footer -->
</div><!-- #page -->

</body>
<?php wp_footer(); ?>
</html>