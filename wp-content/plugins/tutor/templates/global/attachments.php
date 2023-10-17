<?php
/**
 * Display attachments
 *
 * @package Tutor\Templates
 * @subpackage Global
 * @author Themeum <support@themeum.com>
 * @link https://themeum.com
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$attachments    = tutor_utils()->get_attachments();
$open_mode_view = apply_filters( 'tutor_pro_attachment_open_mode', null ) == 'view' ? ' target="_blank" ' : null;

do_action( 'tutor_global/before/attachments' );

/**changed by ala */
if ( is_array( $attachments ) && count( $attachments ) ) : ?>
    <div class="tutor-course-attachments tutor-row">
		<?php foreach ( $attachments as $attachment ) : ?>
			<object data="<?php echo esc_url( $attachment->url ); ?>" type="application/pdf" width="100%" height="700px" download="none"></object>
		<?php endforeach; ?>
    </div>
<?php else :
    tutor_utils()->tutor_empty_state( __( 'No Attachment Found', 'tutor' ) );
endif;

do_action( 'tutor_global/after/attachments' ); ?>
