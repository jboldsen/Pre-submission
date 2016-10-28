<?php

?>

<style type="text/css">

	ul.gf-all-fields { border-top: 1px solid #eee; }
	ul.gf-all-fields > li { border-bottom: 1px solid #eee; padding: 10px 10px 15px !important; }
	ul li span { vertical-align: top; }
	ul li span:first-child { font-weight: bold; width: 30%; }

	li.gf_left_third,
	li.gf_middle_third,
	li.gf_right_third { width: 31%; float: left; }
	li.gf_left_third { clear: left; }
	li.gf_right_third { clear: right; }
	li.gf_right_third + li:not( .gf_left_third ) {
		clear: both;
	}

	body .gform_wrapper div.gform_body ul.gform_fields li.gfield.gfield_html ul li,
	body .gform_wrapper form div.gform_body ul.gform_fields li.gfield.gfield_html ul li {
		list-style-type: none !important;
		margin: 0 !important;
	}

	body .gform_confirmation_wrapper ul li,
	body .gform_confirmation_wrapper ul li {
		list-style-type: none !important;
		margin: 0 !important;
	}

</style>

<?php
$styles = array(
	'ul'         => 'border-top: 1px solid #eee;margin:0;padding:0;',
	'li'         => 'border-bottom: 1px solid #eee; padding: 10px 10px 15px; margin: 0; list-style-type: none;',
	'span'       => 'vertical-align: top; display: inline-block;',
	'span.label' => 'vertical-align: top; display: inline-block; font-weight: bold; width: 32%;'
);
$reset_styles = $styles;
?>


<?php
/*<ul class="gf-all-fields" style="<?php echo $styles['ul']; ?>">
	<?php foreach( $items as $item ):

		$css_class = isset( $item['field'] ) ? $item['field']->cssClass : '';

		if( preg_match( '/gf_left_half|gf_middle_half|gf_right_half/', $css_class, $matches ) === 1 ) {
			$styles['li'] .= 'width: 24.7%; display: inline-block;';
			$styles['span.label'] .= 'width: auto; display: inline-block;padding-right:20px;';
		} else if( isset( $prev_item ) && strpos( $prev_item['field']->cssClass, 'gf_right_third' ) !== false && $css_class != 'gf_left_third' ) {
			$styles['li'] .= 'clear:both;';
		}

		?>

		<li class="<?php echo $css_class; ?>" style="<?php echo $styles['li']; ?>">
			<span style="<?php echo $styles['span.label']; ?>"><?php echo $item['label']; ?></span>
			<span style="<?php echo $styles['span']; ?>"><?php echo $item['value']; ?></span>
		</li>

		<?php
		$prev_item = $item;
		$styles    = $reset_styles;
	endforeach; ?>
</ul>*/?>


<ul class="gf-all-fields">
	<?php foreach( $items as $item ):

		$css_class = isset( $item['field'] ) ? $item['field']->cssClass : '';

		?>

		<?php if( isset( $item['field'] ) && $item['field']->type == 'section' ): ?>
		<li class="gf-section-break2 <?php echo $css_class; ?>">
			<span><?php echo $item['label']; ?></span>
		</li>
	 <?php else: ?>
		<li class="<?php echo $css_class; ?>">
			<span><?php echo $item['label']; ?></span>
			<span><?php echo $item['value']; ?></span>
		</li>
	<?php endif; ?>

	<?php endforeach; ?>
</ul>