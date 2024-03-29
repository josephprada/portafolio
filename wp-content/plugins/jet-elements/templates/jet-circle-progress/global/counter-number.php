<?php
/**
 * Counter number template
 */
$value = 0;

if ( 'percent' === $settings['values_type'] ) {
	$value = 100 <= $settings['percent_value']['size'] ? 100 : $settings['percent_value']['size'];
} else {
	$value  = is_string( $settings['absolute_value_curr'] ) ? str_replace(",", "", $settings['absolute_value_curr']) : $settings['absolute_value_curr'];
}

$this->add_render_attribute( 'circle-counter', array(
	'class'         => 'circle-counter__number',
	'data-to-value' => floatval($value),
) );

if ( ! empty( $settings['thousand_separator'] ) ) {
	$this->add_render_attribute( 'circle-counter', 'data-delimiter', ',' );
}
?>
<span <?php echo $this->get_render_attribute_string( 'circle-counter' ); ?>>0</span>