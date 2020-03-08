<?php get_header(); ?>
	<!-- Main section -->
	<main>
		
		<?php if( have_rows( 'hero_slider' ) ): ?>
			<!-- Hero section -->
			<section class="hero hero_slider__container">
				<!-- Hero slider -->
				<div class="swiper-container hero_slider__slider">
				    <!-- Additional required wrapper -->
				    <div class="swiper-wrapper">
				        <!-- Slides -->
				        <?php while( have_rows( 'hero_slider' ) ): the_row(); ?>
				        	<?php
				        		// Data
					        	// Data - title
					        	$title = get_sub_field( 'title' );
					        	// Data - text
					        	$text = get_sub_field( 'text' );
				        		// Data - image
				        		$image = get_sub_field( 'image' );
				        		$image_id = $image['ID'];
				        		$image_src = wp_get_attachment_image_url( $image_id, '1920x1080' );
				        		$image_srcset = wp_get_attachment_image_srcset( $image_id, '1920x1080' );
				        		$image_alt = get_post_meta( $full_width_image_desktop_id, '_wp_attachment_image_alt', true );
				        	?>
				        	<?php if( $image ): ?>
						        <div class="swiper-slide">
						        	<div class="swiper-slide__img">
						        		<img src="<?php echo esc_attr( $image_src ); ?>" srcset="<?php echo esc_attr( $image_srcset ); ?>" sizes="100vw" alt="<?php echo $image_alt; ?>">
						        	</div>
						        	<?php if( $title || $text ): ?>
							        	<div class="swiper-slide__content">
							        		<?php if( $title ): ?>
							        			<h2><?php echo $title; ?></h2>
							        		<?php endif; ?>
							        		<?php if( $text ): ?>
							        			<p><?php echo wp_trim_words( $text, 10 ); ?></p>
							        		<?php endif; ?>
							        	</div>
						        	<?php endif; ?>
						        </div>
					    	<?php endif; ?>
				        <?php endwhile; ?>
				    </div>
				    <!-- Pagination -->
				    <div class="swiper-pagination swiper-pagination-bullets--nobg"></div>
				</div>
				<!--/ hero slider -->
			</section>
			<!--/ hero section -->
		<?php endif; ?>

		<!-- flexible content section -->
		<?php get_template_part( 'includes/flexible-content/flexible-content', 'page' ); ?>
		<!--/ flexible content section -->

	</main>
	<!--/ main section -->
<?php get_footer(); ?>