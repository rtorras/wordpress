	</div></section>

<?php if(is_front_page() & !is_paged() ) { ?>
<p class="engine"><?php _e('Theme created by', 'modern_multipurpose'); ?> <a href="http://thememotive.com/">thememotive.com</a>. <?php _e('Powered by', 'modern_multipurpose'); ?> <a href="http://wordpress.org/">WordPress.org</a>.</p>
<?php } ?>

	<footer><div>
	
    	<div class="clearfix widgets">
        	<div class="cols">
				<div  class="col">
					<?php dynamic_sidebar('footer-widget-area-1'); ?>
				</div >
				<div  class="col">
					<?php dynamic_sidebar('footer-widget-area-2'); ?>
				</div >
			</div>
            <div class="cols">
				<div  class="col">
					<?php dynamic_sidebar('footer-widget-area-3'); ?>
				</div >
				<div  class="col">
					<?php dynamic_sidebar('footer-widget-area-4'); ?>
				</div >
			</div>
        </div >
    
		<div class="f-menu">
			<?php wp_nav_menu( array('fallback_cb' => 'modern_multipurpose_page_menu', 'container' => false, 'depth' => '1', 'theme_location' => 'secondary', 'link_before' => '', 'link_after' => '') ); ?>
		</div>
		
	</div></footer>
<?php wp_footer(); ?>	
</body>
</html>