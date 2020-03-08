<?php if( get_row_layout() == 'review_list' ): ?>
	<?php
		// data
		$reviews = get_sub_field( 'reviews' );
		$section_background = get_sub_field( 'section_background' );
		$section_background_src = $section_background['sizes']['1920x1080'];
	?>

	<?php if( $reviews ): ?>
		<!-- Hero section -->
		<section class="layout__review_list">
			<!-- Hero slider -->
			<div class="swiper-container review_list__slider">
			    <!-- Additional required wrapper -->
			    <div class="swiper-wrapper">
			        <!-- Slides -->
			        <?php foreach( $reviews as $post ): ?>
			        	<?php
			        		// prepare data
			        		setup_postdata( $post );
			        		// data
			        		$content = get_the_content();
			        		$review_author = get_field( 'review_author' );
			        		$review_author_img = get_the_post_thumbnail_url( $review_author, 'medium' );
			        	?>
			        	<?php if( $review_author ): ?>
					        <div class="swiper-slide">
					        	<?php if( $review_author_img ): ?>
						        	<div class="swiper-slide__img-container">
						        		<div class="swiper-slide__img">
						        			<img src="<?php echo $review_author_img; ?>" alt="<?php echo $review_author->post_title; ?>-image">
						        		</div>
						        	</div>
					        	<?php endif; ?>
					        	<?php if( $content ): ?>
						        	<div class="swiper-slide__content">
						        		<p><?php echo wp_trim_words( $content, 15 ); ?></p>
						        	</div>
					        	<?php endif; ?>
					        </div>
				    	<?php endif; ?>
			        <?php endforeach; ?>
			        <!-- reset $post object -->
			        <?php wp_reset_postdata(); ?>
			        <!--/ reset $post object -->
			    </div>
			    <!-- Pagination -->
			    <div class="swiper-pagination"></div>
			</div>
			<!--/ hero slider -->
		</section>
		<!--/ hero section -->
	<?php endif; ?>

<?php endif; ?>