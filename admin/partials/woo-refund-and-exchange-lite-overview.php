<?php
/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the html field for overview.
 *
 * @link       https://makewebbetter.com/
 * @since      1.0.0
 *
 * @package    Woo_Refund_And_Exchange_Lite
 * @subpackage Woo_Refund_And_Exchange_Lite/admin/partials
 */

?>

<div class="mwb-overview__wrapper">
	<div class="mwb-overview__banner">
		<img src="<?php echo esc_html( WOO_REFUND_AND_EXCHANGE_LITE_DIR_URL ); ?>admin/image/banner.jpg" alt="Overview banner image">
	</div>
	<div class="mwb-overview__content">
		<div class="mwb-overview__content-description">
			<h2><?php echo esc_html_e( 'What Is Woo Refund And Exchange Lite?', 'woo-refund-and-exchange-lite' ); ?></h2>
			<p>
				<?php
				esc_html_e(
					'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.                '
				);
				?>
			</p>
			<h3><?php esc_html_e( 'As a store owner, you get to:', 'woo-refund-and-exchange-lite' ); ?></h3>
			<ul class="mwb-overview__features">
				<li><?php esc_html_e( 'Lorem Ipsum is simply dummy text.', 'woo-refund-and-exchange-lite' ); ?></li>
				<li><?php esc_html_e( 'Lorem Ipsum is simply dummy text.', 'woo-refund-and-exchange-lite' ); ?></li>
			</ul>
		</div>
		<h2> <?php esc_html_e( 'The Free Plugin Benefits', 'woo-refund-and-exchange-lite' ); ?></h2>
		<div class="mwb-overview__keywords">
			<div class="mwb-overview__keywords-item">
				<div class="mwb-overview__keywords-card">
					<div class="mwb-overview__keywords-image">
						<img src="<?php echo esc_html( WOO_REFUND_AND_EXCHANGE_LITE_DIR_URL . 'admin/image/Advanced-report.png' ); ?>" alt="Advanced-report image">
					</div>
					<div class="mwb-overview__keywords-text">
						<h3 class="mwb-overview__keywords-heading"><?php echo esc_html_e( ' Lorem Ipsum ', 'woo-refund-and-exchange-lite' ); ?></h3>
						<p class="mwb-overview__keywords-description">
							<?php
							esc_html_e( 'Lorem Ipsum ', 'woo-refund-and-exchange-lite' );
							?>
						</p>
					</div>
				</div>
			</div>
			<div class="mwb-overview__keywords-item">
				<div class="mwb-overview__keywords-card">
					<div class="mwb-overview__keywords-image">
						<img src="<?php echo esc_html( WOO_REFUND_AND_EXCHANGE_LITE_DIR_URL . 'admin/image/Workflow.png' ); ?>" alt="Workflow image">
					</div>
					<div class="mwb-overview__keywords-text">
						<h3 class="mwb-overview__keywords-heading"><?php echo esc_html_e( ' Lorem Ipsum ', 'woo-refund-and-exchange-lite' ); ?></h3>
						<p class="mwb-overview__keywords-description">
							<?php
							esc_html_e( 'Lorem Ipsum ', 'woo-refund-and-exchange-lite' );
							?>
						</p>
					</div>
				</div>
			</div>
			<div class="mwb-overview__keywords-item">
				<div class="mwb-overview__keywords-card">
					<div class="mwb-overview__keywords-image">
						<img src="<?php echo esc_html( WOO_REFUND_AND_EXCHANGE_LITE_DIR_URL . 'admin/image/Variable-product.png' ); ?>" alt="Variable product image">
					</div>
					<div class="mwb-overview__keywords-text">
						<h3 class="mwb-overview__keywords-heading"><?php echo esc_html_e( ' Lorem Ipsum ', 'woo-refund-and-exchange-lite' ); ?></h3>
						<p class="mwb-overview__keywords-description">
							<?php
							esc_html_e( 'Lorem Ipsum ', 'woo-refund-and-exchange-lite' );
							?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
