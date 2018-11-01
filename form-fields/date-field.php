<?php
/**
 * Shows a datecomplete field on job listing forms.
 *
 * @author      Nic
 * @package     TaskyBid
 * @category    form-fields
 * @version     1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

wp_enqueue_script( 'wp-taskybid-datecomplete' );
wp_enqueue_style( 'jquery-ui' );

?>
<input type="text" class="input-date job-manager-datecomplete" name="<?php echo esc_attr( isset( $field['name'] ) ? $field['name'] : $key ); ?>"<?php if ( isset( $field['autocomplete'] ) && false === $field['autocomplete'] ) { echo ' autocomplete="off"'; } ?> id="<?php echo esc_attr( $key ); ?>" placeholder="<?php echo empty( $field['placeholder'] ) ? '' : esc_attr( $field['placeholder'] ); ?>" value="<?php echo isset( $field['value'] ) ? esc_attr( $field['value'] ) : ''; ?>" <?php if ( ! empty( $field['required'] ) ) echo 'required'; ?> date
<?php if ( ! empty( $field['description'] ) ) : ?><small class="description"><?php echo wp_kses_post( $field['description'] ); ?></small><?php endif; ?>
