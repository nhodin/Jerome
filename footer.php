<?php
/**
 * @package Frank
 */
?>
</div>

<footer>
	<?php if ( frank_tweet_post_attribution() ): ?>
		<a href="https://twitter.com/<?php echo frank_tweet_post_attribution(); ?>" title="Suivez-moi sur Twitter">
			<div class="logo-twitter-small">
				<div class="body"></div>
				<div class="body-none"></div>
				<div class="beak-bottom"></div>
				<div class="beak-bottom-none"></div>
				<div class="wing-bottom"></div>
				<div class="wing-bottom-none"></div>
				<div class="wing-middle"></div>
				<div class="wing-middle-none"></div>
				<div class="wing-top"></div>
				<div class="wing-top-none"></div>
				<div class="beak-top"></div>
				<div class="beak-top-none"></div>
				<div class="head"></div>
			</div>
		</a>
	<?php endif; ?>
</footer>

<?php if ( is_active_sidebar( 'widget-footer' ) ) : ?>
<div id="page-bottom">
	<footer id="page-footer" class="container" role="contentinfo">

		<div class="row">
		<?php if ( ! dynamic_sidebar( 'Footer' ) ) : ?>

		<?php endif; ?>
		</div>
	</footer>
</div>
<?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>