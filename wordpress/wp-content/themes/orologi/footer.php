<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>
		<div id="footer-container">
			<footer id="footer">
				<section id="assurance" class="row">
					<article class="assurance-1 small-12 medium-4 columns">
						<img src="<?= _URL_IMAGES; ?>../images/camionette.png" alt="" />
						<p>
							livraison et retour rapide sous 24 heures
						</p>
					</article>
					<article class="assurance-2 small-12 medium-4 columns">
						<img src="<?= _URL_IMAGES; ?>../images/banner.png" alt="" />
						<p>
							Authenticité des produits et tracabilité
						</p>
					</article>
					<article class="assurance-3 small-12 medium-4 columns">
						<img src="" alt="" />
						<p>
							Paiement paypal, visa, mastercard sécurisé
						</p>
					</article>
				</section>
				<section id="foot" class="row">
					<article class="foot-1 small-12 medium-3 columns">
						<h6>informations</h6>
						<p>À propos de nous</p>
						<p>Contactez-nous</p>
						<p>Confidentialité</p>
						<p>Plan du site</p>
						<p>Crédits</p>
					</article>
					<article class="foot-2 small-12 medium-3 columns">
						<h6>Aide et assistance</h6>
						<p>Mentions légales</p>
						<p>Livraisons et retours</p>
						<p>CGV</p>
					</article>
					<article class="foot-3 small-12 medium-3 columns">
						<h6>suiver nous</h6>
						<p>Facebook</p>
						<p>Tweeter</p>
						<p>Google plus</p>
					</article>
					<article class="foot-4 small-12 medium-3 columns">
						<h6>newsletter</h6>
						<form class="newsletter" action="#" method="post">
							<input type="email" class="mail" name="email" value="votre email">
							<input type="submit" class="envois" name="submit" value=">">
						</form>
					</article>
				</section>
			</footer>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
