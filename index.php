<?php
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
				'next_text'          => __( 'Next page', 'twentyfifteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'content', 'none' );

		endif;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>



<!-- <?php get_header(); ?>


			<div class="container" id="content_index">

			<?php if(have_posts()): ?>
			<?php while(have_posts()): the_post(); ?>
				<?php the_post_thumbnail(); ?>
				<?php the_title(); ?>

			<?php endwhile; ?> 
			<?php endif; ?>	

				<div class="item" title="DripTip 810 by Custom Vape Parts (высокие)">
					<div class="img">
						<a href="/catalog/devaysy/driptipy/driptip-810-by-custom-vape-parts-vysokie.html" title="DripTip 810 by Custom Vape Parts (высокие)"><img alt="" border="0" class="parent" height="212" src=".//wp-content/themes/kultpara/images/790b354e290355296353b4ea33fc0058.jpg" width="230"><img alt="" border="0" class="dop" height="212" src=".//wp-content/themes/kultpara/images/fdebfd886ba39e9426153de19054efce.jpg" width="230"></a>
					</div>
					<div class="name">
						<a href="/catalog/devaysy/driptipy/driptip-810-by-custom-vape-parts-vysokie.html" title="DripTip 810 by Custom Vape Parts (высокие)">DripTip 810 by Custom Vape Parts (высокие)</a>
					</div>
					<div class="price">
						<span class="catalog-price">990 руб.</span>
					</div>
				</div>


				<div class="clr"></div>

			</div>
		</div>

	<?php get_footer(); ?>
		
 -->