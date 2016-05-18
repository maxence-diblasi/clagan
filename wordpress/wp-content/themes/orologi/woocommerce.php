<?php
/**
 * Basic WooCommerce support
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
get_header(); ?>

<div class="row">
	<div class="small-12 large-12 columns" role="main">
		<!--// ICI...-->
	<?php do_action( 'foundationpress_before_content' ); ?>

	<?php while ( woocommerce_content() ) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>
			<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>

			<footer>
				<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php do_action( 'foundationpress_page_before_comments' ); ?>
			<?php comments_template(); ?>
			<?php do_action( 'foundationpress_page_after_comments' ); ?>
		</article>
	<?php endwhile;?>
	<!--// LA...-->
	<section class="row">

	</section>
	<section class="les_marques row">
		<h3 class="small-12  columns text-center">Les marques</h3>
		<div class="small-12 medium-4 large-2 text-center columns">
			<img src="<?= _URL_IMAGES; ?>../images/chan.png" alt="" />
		</div>
		<div class="small-12 medium-4 large-2 text-center columns">
			<img src="<?= _URL_IMAGES; ?>../images/bell.png" alt="" />
		</div>
		<div class="small-12 medium-4 large-2 text-center columns">
			<img src="<?= _URL_IMAGES; ?>../images/omer.png" alt="" />
		</div>
		<div class="small-12 medium-4 large-2 text-center columns">
			<img src="<?= _URL_IMAGES; ?>../images/ex.png" alt="" />
		</div>
		<div class="small-12 medium-4 large-2 text-center columns">
			<img src="<?= _URL_IMAGES; ?>../images/cartier.png" alt="" />
		</div>
		<div class="small-12 medium-4 large-2 text-center columns">
			<img src="<?= _URL_IMAGES; ?>../images/chopard.png" alt="" />
		</div>
	</section>
	<?php do_action( 'foundationpress_after_content' ); ?>

	</div>
</div>
<?php get_footer();
