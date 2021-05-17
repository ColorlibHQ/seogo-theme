<?php 
/**
 * @Packge     : Seogo
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
    // Block direct access
    if( !defined( 'ABSPATH' ) ){
        exit( 'Direct script access denied.' );
    }

        /**
         * Footer Area
         *
         * @Footer
         * @Back To Top Button
         *
         * @Hook seogo_footer
         *
         * @Hooked  seogo_footer_area 
         *
         */

		do_action( 'seogo_footer' );

	wp_footer(); 
 ?>
</body>
</html>