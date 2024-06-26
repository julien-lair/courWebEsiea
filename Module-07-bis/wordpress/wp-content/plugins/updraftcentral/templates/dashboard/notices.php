<?php
/**
 * This file displays notices in the dashboard header
 */
?>
<div id="updraftcentral_notice_container">
<?php
	foreach ($this->notices as $notice) {
	if (!is_array($notice)) continue;
	?>
	<div class="updraftcentral_notice updraftcentral_notice_level_
	<?php
	echo esc_attr($notice['level']);
	// This is the old way extra classes was added by filter
	if (!empty($notice['extra_classes'])) echo ' '.esc_attr($notice['extra_classes']);
	// Notice class now accepts an options array where an extra classes array can be passed
	if (!empty($notice['options']['extra_classes'])) {
		foreach ($notice['options']['extra_classes'] as $key => $value) {
			echo ' ' . esc_attr($value) . ' ';
		}
	}
	?>
	">
	<?php
	if (true == $notice['options']['show_dismiss']) {
	echo '<button type="button" class="updraftcentral_notice_dismiss" aria-label="' . esc_attr('Close', 'updraftcentral') . '"></button>';
	}
	?>
	<?php echo wp_kses($notice['content'], wp_kses_allowed_html('post'));?>
	</div>
	<?php } ?>
</div>
