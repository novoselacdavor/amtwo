<?php if( get_row_layout() == 'only_text' ): ?>
	<?php
		// data
		$title = get_sub_field( 'title' );
		$text = get_sub_field( 'text' );
		$section_background = get_sub_field( 'section_background' );
	?>
	<section class="layout__only_text"
		<?php echo $section_background ? 'style="background-color:' . $section_background . ';"' : null ?>
	>
		<?php if( $title || $text ): ?>
			<div class="container">
				<div class="only_text__inner">
					<?php if( $title ): ?>
						<h2><?php echo $title; ?></h2>
					<?php endif; ?>
					<?php if( $text ): ?>
						<div><?php echo $text; ?></div>
					<?php endif; ?>
				</div>
			</div>
		<?php endif; ?>
	</section>
<?php endif; ?>