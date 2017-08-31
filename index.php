<?php get_header(); ?>

<div class="wrap">
	
	<div id="primary" class="content-area">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
			<?php
			if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/post/content', get_post_format() );

				endwhile;

				the_posts_pagination( array(
					'prev_text' => dolphin_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'dolphin' ) . '</span>',
					'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'dolphin' ) . '</span>' . dolphin_get_svg( array( 'icon' => 'arrow-right' ) ),
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'dolphin' ) . ' </span>',
				) );

			else :

				get_template_part( 'template-parts/post/content', 'none' );

			endif;
			?>
				</div>
			</div>	
		</div>
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php get_footer(); ?>