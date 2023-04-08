<?php
/**
 * Displays the menus and widgets at the end of the main element.
 * Visually, this output is presented as part of the footer element.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

$has_footer_menu = has_nav_menu( 'footer' );
$has_social_menu = has_nav_menu( 'social' );

$has_sidebar_1 = is_active_sidebar( 'sidebar-1' );
$has_sidebar_2 = is_active_sidebar( 'sidebar-2' );
$has_sidebar_3 = is_active_sidebar('sidebar-3');

// Only output the container if there are elements to display.
if ( $has_footer_menu || $has_social_menu || $has_sidebar_1 || $has_sidebar_2 ) {
	?>

<!--	<div class="footer-nav-widgets-wrapper header-footer-group">-->
<!---->
<!--		<div class="footer-inner section-inner">-->

			<?php

			$footer_top_classes = '';

			$footer_top_classes .= $has_footer_menu ? ' has-footer-menu' : '';
			$footer_top_classes .= $has_social_menu ? ' has-social-menu' : '';

			if ( $has_footer_menu || $has_social_menu ) {
				?>
				<div class="footer-top<?php echo $footer_top_classes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static output ?>">
					<?php if ( $has_footer_menu ) { ?>

						<nav aria-label="<?php esc_attr_e( 'Footer', 'twentytwenty' ); ?>" class="footer-menu-wrapper">

							<ul class="footer-menu reset-list-style">
								<?php
								wp_nav_menu(
									array(
										'container'      => '',
										'depth'          => 1,
										'items_wrap'     => '%3$s',
										'theme_location' => 'footer',
									)
								);
								?>
							</ul>

						</nav><!-- .site-nav -->

					<?php } ?>
					<?php if ( $has_social_menu ) { ?>

						<nav aria-label="<?php esc_attr_e( 'Social links', 'twentytwenty' ); ?>" class="footer-social-wrapper">

							<ul class="social-menu footer-social reset-list-style social-icons fill-children-current-color">

								<?php
								wp_nav_menu(
									array(
										'theme_location'  => 'social',
										'container'       => '',
										'container_class' => '',
										'items_wrap'      => '%3$s',
										'menu_id'         => '',
										'menu_class'      => '',
										'depth'           => 1,
										'link_before'     => '<span class="screen-reader-text">',
										'link_after'      => '</span>',
										'fallback_cb'     => '',
									)
								);
								?>

							</ul><!-- .footer-social -->

						</nav><!-- .footer-social-wrapper -->

					<?php } ?>
				</div><!-- .footer-top -->

			<?php } ?>

			<?php if ( $has_sidebar_1 || $has_sidebar_2 || $has_sidebar_3) { ?>

<!--				<aside class="footer-widgets-outer-wrapper">-->
<!---->
<!--					<div class="footer-widgets-wrapper">-->
            <section id="footer">
                <div class="container">
                    <div class="row text-center text-xs-center text-sm-left text-md-left">

						<?php if ( $has_sidebar_1 ) { ?>
<!---->
<!--							<div class="footer-widgets column-one grid-item">-->
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <?php dynamic_sidebar( 'sidebar-3' ); ?>
                        </div>
<!--							</div>-->
<!---->
						<?php } ?>
<!---->
						<?php if ( $has_sidebar_2 ) { ?>
<!---->
<!--							<div class="footer-widgets column-two grid-item">-->
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <?php dynamic_sidebar( 'sidebar-3' ); ?>
                        </div>
<!--							</div>-->
<!---->
						<?php } ?>

                        <?php if ( $has_sidebar_3 ) { ?>

<!--                            <div class="footer-widgets column-two grid-item"> -->
                        <div class="col-xs-12 col-sm-4 col-md-4">
                                <?php dynamic_sidebar( 'sidebar-3' ); ?>
                        </div>
<!--                            </div> -->

                        <?php } ?>
                    </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                                <ul class="list-unstyled list-inline social text-center">
                                    <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-google-plus"></i></a></li>
                                    <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02" target="_blank"><i class="fa fa-envelope"></i></a></li>
                                </ul>
                            </div>
                            <hr>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                                <p><u><a href="https://www.nationaltransaction.com/">National Transaction Corporation</a></u> is a Registered MSP/ISO of Elavon, Inc. Georgia [a wholly owned subsidiary of U.S. Bancorp, Minneapolis, MN]</p>
                                <p class="h6">© All right Reversed.<a class="text-green ml-2" href="https://www.sunlimetech.com" target="_blank">Sunlimetech</a></p>
                            </div>
                            <hr>
                        </div>
                    </div>
            </section>
<!--					</div> --> <!-- .footer-widgets-wrapper-->

<!--				</aside> --> <!-- .footer-widgets-outer-wrapper -->

			<?php } ?>

<!--		</div> --><!-- .footer-inner -->

<!--	</div> --><!-- .footer-nav-widgets-wrapper -->

	<?php
}
