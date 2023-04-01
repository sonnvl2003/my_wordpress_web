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

// Only output the container if there are elements to display.
if ( $has_footer_menu || $has_social_menu || $has_sidebar_1 || $has_sidebar_2 ) {
    ?>
    <!-- Footer -->
    <section id="footer">
    <div class="container">


            <?php if ( $has_sidebar_1 || $has_sidebar_2 ) { ?>


                        <div class="row text-center text-xs-center text-sm-left text-md-left">

                        <?php if ( $has_sidebar_1 ) { ?>

                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <?php dynamic_sidebar( 'sidebar-1' ); ?>
                            </div>

                        <?php } ?>

                            <?php if ( $has_sidebar_1 ) { ?>

                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <?php dynamic_sidebar( 'sidebar-1' ); ?>
                                </div>

                            <?php } ?>

                        <?php if ( $has_sidebar_2 ) { ?>

                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <?php dynamic_sidebar( 'sidebar-2' ); ?>
                            </div>

                        <?php } ?>


                        </div>


            <?php } ?>


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
    <?php
}