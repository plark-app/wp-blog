<article id="post-<?php the_ID(); ?>" <?php post_class("article"); ?>>
	<a class="article__entire" href="<?php echo get_permalink() ?>"></a>
	<?php if (get_the_post_thumbnail()): ?>
		<div class="article__thumbnail" style='background-image: url("<?php echo(the_post_thumbnail_url( array(220, 315))); ?>")'></div>
	<?php endif; ?>
	<?php
	if ( 'post' === get_post_type() ) :
		?>
		<div class="article__info">
			<div class="article__tags">
				<?php
					$tags = wp_get_post_tags($post->ID);
					foreach ($tags as $tag) {
						$tag_link = get_tag_link($tag->term_id);
				?>
					<a class='article__tag' href='<?php echo($tag_link) ?>'><?php echo($tag->name) ?></a>
					<?php }
				?>
			</div>
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="article__title">', '</h1>' );
			else :
				the_title( '<h2 class="article__title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;
			?>
			<div class="article__content-part">
				<?php the_excerpt(); ?>
			</div>
			<?php
				// plark_theme_posted_on();
				// plark_theme_posted_by();
			?>
			<div class="article__author">
				<!-- <a class="article__entire" href="#"></a> -->
				<div class="article__author-avatar">
					<?php echo get_avatar( get_the_author_email(), '40' ); ?>
				</div>
				<div class="article__author-data">
					<!-- <p class="article__author-name"><?php the_author_meta('first_name'); ?> <?php the_author_meta('last_name'); ?></p> -->
					<p class="article__author-name"><?php echo get_the_author_posts_link();?></p>
					<p class="article__author-post_date"><?php echo get_the_date('M j, o') ?></p>
				</div>
			</div>
		</div><!-- .entry-meta -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->