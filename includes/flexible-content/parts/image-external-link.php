<?php if( get_row_layout() == 'image_external_link' ): ?>
	<!-- section image-external-link -->
	<?php
		// data
		$items = get_sub_field( 'items' );
		$section_background = get_sub_field( 'section_background' );
		$section_id = get_sub_field( 'section_id' );
	?>
	<?php if( $items ): ?>
		<section class="layout__image_external_link"
			<?php echo $section_background ? 'style="background-color:' . $section_background . ';"' : null ?>
			<?php echo $section_id ? 'id="'.$section_id.'"' : null; ?>
		>
			<div class="container">
				<div class="image_external_link__inner">
					<?php foreach( $items as $data ): ?>
						<?php
							// data
							$image = $data['image'];
							$image_src = $data['image']['sizes']['thumbnail'];
							$link_url = $data['link_url'];
						?>
						<div class="image_external_link__item">
							<?php if( $image ): ?>
								<a href="<?php echo $link_url; ?>" target="_blank">
									<img src="<?php echo $image_src; ?>" alt="<?php echo $image['name']; ?>">
								</a>
							<?php endif; ?>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</section>
	<?php endif; ?>
	<!--/ section image-external-link -->
<?php endif; ?>