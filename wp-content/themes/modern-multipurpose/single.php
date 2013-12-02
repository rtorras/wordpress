<?php get_header(); ?>
<div class="main">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="post">
			<p class="post-date"><span><?php the_time('j'); ?></span> <?php the_time('m Y'); ?></p>
				<div class="post-head">
					<h1><?php the_title(); ?> <?php edit_post_link(__('Edit this entry', 'modern_multipurpose'), '', ''); ?></h1>
					<p class="post-meta"><span><span class="icon author"></span> <?php the_author(); ?></span> | <span><span class="icon cats"></span><?php the_category(", "); ?></span> <?php if ( comments_open() ) : ?>| <?php comments_popup_link('<span class="icon comments"></span> 0', '<span class="icon comments"></span> 1', '<span class="icon comments"></span> %', 'comment-link'); ?><?php endif; ?> </p>
				</div>
			<?php the_content(); ?>
			<?php wp_link_pages(array('before' => '<p class="pages"><strong>'.__('Pages', 'modern_multipurpose').':</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			<?php if(has_tag()): ?><p class="tags"><span class="icon tags"></span><?php the_tags(""); ?></p><?php endif; ?>

			<p><?php posts_nav_link(); ?></p>
			<p class="pagination">
				<span class="prev"><?php previous_post_link('%link'); ?></span>
				<span class="next"><?php next_post_link('%link'); ?></span>
			</p>

			<div id="comments">
				<?php comments_template(); ?>
			</div>
		</article>
	<?php endwhile; endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
