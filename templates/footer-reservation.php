<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
	exit( 'Direct script access denied.' );
}
/**
 * @Packge 	   : Seogo
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

	$seogo_reservation_title     = !empty( seogo_opt( 'seogo_reservation_title' ) ) ? seogo_opt( 'seogo_reservation_title' ) : '';
	$seogo_reservation_sub_title = !empty( seogo_opt( 'seogo_reservation_sub_title' ) ) ? seogo_opt( 'seogo_reservation_sub_title' ) : '';
	$seogo_reservation_btn_text  = !empty( seogo_opt( 'seogo_reservation_btn_text' ) ) ? seogo_opt( 'seogo_reservation_btn_text' ) : '';
	$seogo_reservation_btn_url	  = !empty( seogo_opt( 'seogo_reservation_btn_url' ) ) ? seogo_opt( 'seogo_reservation_btn_url' ) : '';
	?>
	<div class="footer_header d-flex justify-content-between">
		<div class="footer_header_left">
			<h3><?php echo esc_html( $seogo_reservation_title )?></h3>
			<p><?php echo esc_html( $seogo_reservation_sub_title )?></p>
		</div>
		<div class="footer_btn">
			<a href="<?php echo esc_url( $seogo_reservation_btn_url )?>" class="boxed-btn2"><?php echo esc_html( $seogo_reservation_btn_text )?></a>
		</div>
	</div>