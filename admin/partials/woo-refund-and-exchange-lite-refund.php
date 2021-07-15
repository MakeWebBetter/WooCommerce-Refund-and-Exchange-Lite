<?php
/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the html field for general tab.
 *
 * @link       https://makewebbetter.com/
 * @since      1.0.0
 *
 * @package    Woo_Refund_And_Exchange_Lite
 * @subpackage Woo_Refund_And_Exchange_Lite/admin/partials
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
global $wrael_mwb_rma_obj;
$mwb_rma_refund_html = apply_filters( 'mwb_rma_refund_settings_array', array() );
$woo_email_url       = admin_url() . 'admin.php?page=wc-settings&tab=email';
?>
<!--  template file for admin settings. -->
<form action="" method="POST" class="mwb-wrael-gen-section-form">
	<div class="wrael-secion-wrap">
		<?php
		$mwb_rma_refund_html = $wrael_mwb_rma_obj->mwb_rma_plug_generate_html( $mwb_rma_refund_html );
		echo esc_html( $mwb_rma_refund_html );
		wp_nonce_field( 'admin_save_data', 'mwb_tabs_nonce' );
		?>
	</div>
</form>
<h6>
<?php
/* translators: %s: search term */
echo sprintf( esc_html__( 'To configure refund related emails %s.', 'woo-refund-and-exchange-lite' ), '<a href="' . esc_html( $woo_email_url ) . '">Click Here</a>' );
?>
</h6>
