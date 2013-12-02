<?php get_header(); ?>
<div class="main">
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<!-- Start: Post -->
			<article <?php post_class(); ?>>
				<p class="post-date"><span><?php the_time('j'); ?></span> <?php the_time('m Y'); ?></p>
				<div class="post-head">
					<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a> <?php edit_post_link(__('Edit this entry', 'modern_multipurpose'), '', ''); ?></h2>
					<p class="post-meta"><span><span class="icon author"></span> <?php the_author(); ?></span> | <span><span class="icon cats"></span><?php the_category(", "); ?></span> <?php if ( comments_open() ) : ?>| <?php comments_popup_link('<span class="icon comments"></span> 0', '<span class="icon comments"></span> 1', '<span class="icon comments"></span> %', 'comment-link'); ?><?php endif; ?> </p>
				</div>
				<?php the_post_thumbnail(); ?>
				<?php the_excerpt(); ?>
				<p class="more"><a href="<?php the_permalink() ?>"><?php _e( ' ', 'modern_multipurpose' );?></a></p>
				<?php if(has_tag()): ?><p class="tags"><span class="icon tags"></span><?php the_tags(""); ?></p><?php endif; ?>
			</article>
			<!-- End: Post -->
		<?php endwhile; ?>

		<p class="pagination">
			<span class="prev"><?php next_posts_link(__('Previous Posts', 'modern_multipurpose')) ?></span>
			<span class="next"><?php previous_posts_link(__('Next posts', 'modern_multipurpose')) ?></span>
		</p>
	<?php else : ?>
		<h2 class="center"><?php _e( 'Not found', 'modern_multipurpose' ); ?></h2>
		<p class="center"><?php _e( 'Sorry, but you are looking for something that isn\'t here.', 'modern_multipurpose' ); ?></p>
		<?php get_search_form(); ?>
	<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
