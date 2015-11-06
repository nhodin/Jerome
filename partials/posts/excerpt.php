<article itemscope itemtype="http://schema.org/BlogPosting" <?php post_class( 'leftaside' ); ?>>
	<header class="post-header">
		<h1 class="post-title">
			<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
		</h1>
	</header>
	<div class="row">
		<?php get_template_part( 'partials/post-metadata','original'); ?>
		<section class="post-content">
			<?php the_post_thumbnail( 'medium-thumbnail' ); ?>
			<?php if(has_excerpt()) {?>
				<?php the_excerpt(); ?>
				<a href="<?php echo get_permalink($post->ID); ?>"><?php echo __( 'Read On&hellip;', 'frank_theme' ); ?></a>
			<?php } else {?>
				<?php the_content( 'Lire la suite&hellip;' ); ?>
			<?php } ?>
		</section>
	</div>
</article>