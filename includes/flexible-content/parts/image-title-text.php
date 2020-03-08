<?php if( get_row_layout() == 'image_title_text' ): ?>
	<?php
		// data
		$items = get_sub_field( 'items' );
		$section_background = get_sub_field( 'section_background' );
	?>
	<?php if( $items ): ?>
		<section class="layout__image_title_text"
			<?php echo $section_background ? 'style="background-color:' . $section_background . ';"' : null ?>
		>
			<div class="container">
				<div class="image_title_text__inner">
					<?php foreach( $items as $data ): ?>
						<?php
							// data
							$image = $data['image'];
							$image_src = $data['image']['sizes']['thumbnail'];
							$title = $data['title'];
							$text = $data['text'];
						?>
						<div class="image_title_text__item">
							<?php if( $image ): ?>
								<img src="<?php echo $image_src; ?>" alt="<?php echo $image['name']; ?>">
							<?php endif; ?>
							<?php if( $title ): ?>
								<h3><?php echo $title; ?></h3>
							<?php endif; ?>
							<?php if( $text ): ?>
								<p><?php echo $text; ?></p>
							<?php endif; ?>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</section>
	<?php endif; ?>
<?php endif; ?>