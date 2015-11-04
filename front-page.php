<?php
/*
Template Name: Home Page
*/
get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<h1 class="entry-title">
						<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'tabula-rasa' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
					</h1>
				</header><!-- .entry-header -->

				<?php if ( is_single() && has_post_thumbnail() ) { ?>
				<div class="entry-thumbnail">
				<?php the_post_thumbnail(); ?>
				</div>		
				<?php } ?>
		
				<div class="entry-content">
					<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'tabula-rasa' ) ); ?>
					<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'tabula-rasa' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
				<h2 style="text-align: center;">FIND AVAILABLE PROPERTIES NOW!</h2>
				<div class="aps-widget">
					<script src="http://media.zoomprospector.com/common/scripts/widget.iframe.js?sst=arizona&amp;environment=production&amp;width=400px&amp;height=200px&amp;color=C0C0C0&amp;defaultview=buildings&amp;showgeography=1&amp;cityID=0457380&amp;newWindow=1"></script>
				</div>	
				
					</div><!-- .entry-content -->
				<div class="content-section-two">
					<?php echo get_post_meta( $post->ID, '_cmb_test_wysiwyg', true ); ?>
				</div>				
			</article><!-- #post -->				
				
				
			<?php endwhile; ?>

			<?php tr_content_nav( 'nav-below' ); ?>

		<?php else : ?>

		<?php get_template_part( 'content', 'none' ); ?>
		
		<?php endif; // end have_posts() check ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>