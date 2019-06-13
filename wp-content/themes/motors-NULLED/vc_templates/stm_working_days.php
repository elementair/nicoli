<?php
$sunday = $monday = $tuesday = $wednesday =  $thursday = $friday = $saturday = '';
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );
$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ) );

$days_of_week = array(
	esc_html__('Domingo', 'motors')     => $sunday,
	esc_html__('Lunes', 'motors')     => $monday,
	esc_html__('Martes', 'motors')    => $tuesday,
	esc_html__('Miércoles', 'motors')  => $wednesday,
	esc_html__('Jueves', 'motors')   => $thursday,
	esc_html__('Viernes', 'motors')     => $friday,
	esc_html__('Sábado', 'motors')   => $saturday
)

?>

<div class="stm-working-days<?php echo esc_attr($css_class); ?>">
	<?php if(!empty($title)): ?>
		<div class="title">
			<i class="stm-icon-calendar"></i>
			<span class="h5"><?php echo esc_attr($title); ?></span>
		</div>
	<?php endif; ?>

	<table class="stm-working-days-table">
		<?php foreach($days_of_week as $key => $label): ?>
			<tr>
				<td class="day-label"><?php echo esc_attr($key); ?></td>
				<?php if(empty($label)): ?>
					<td class="heading-font day-value day-closed"><?php _e('Cerrado', 'motors'); ?></td>
				<?php else: ?>
					<td class="heading-font day-value"><?php echo esc_attr($label); ?></td>
				<?php endif; ?>
			</tr>
		<?php endforeach; ?>
	</table>
</div>