<?php if( get_row_layout() == 'blog_posts' ): ?>
	<!-- section blog-posts -->
	<?php
		// data
		$title = get_sub_field( 'title' );
		$posts = get_sub_field( 'posts' );
		$section_background = get_sub_field( 'section_background' );
		$section_id = get_sub_field( 'section_id' );
	?>
	<?php if( $posts ): ?>
		<section class="layout__blog_posts"
			<?php echo $section_background ? 'style="background-color:' . $section_background . ';"' : null ?>
			<?php echo $section_id ? 'id="'.$section_id.'"' : null; ?>
		>
			<div class="container">
				<?php if( $title ): ?>
					<h2><?php echo $title; ?></h2>
				<?php endif; ?>
				<div class="blog_posts__inner">
					<?php foreach( $posts as $post ): ?>
						<?php
							// prepare data
							setup_postdata( $post );
							// data
							$title = get_the_title();
							$content = get_the_content();
							$image_id = get_post_thumbnail_id( $post );
							$image_alt = get_post_meta( $image_id, '_wp_attachment_image_alt', true );   
							$image_src = get_the_post_thumbnail_url( $post, 'medium_large' );
							$data = get_the_date( 'M d\' y');
							$comment_num = get_comments_number( $post );
						?>
						<div class="blog_posts__item">
							<a href="<?php the_permalink(); ?>">
								<!-- image and content -->
								<?php if( $image_src || $content ): ?>
								<div>
									<?php if( $image_src ): ?>
										<div class="item__image">
											<img src="<?php echo $image_src; ?>" alt="<?php echo $image_alt; ?>">
										</div>
									<?php endif; ?>
									<?php if( $content ): ?>
										<div class="item__content">
											<h3><?php the_title(); ?></h3>
											<p><?php echo wp_trim_words( $content, 20 ); ?></p>
										</div>
									<?php endif; ?>
								</div>
								<?php endif; ?>
								<!--/ image and content -->
								<!-- date and comments -->
								<div>
									<p>
										<span class="icon-clock"></span>
										<span><?php echo $data; ?></span>
									</p>
									<p>
										<span class="icon-chat"></span>
										<span><?php echo $comment_num; ?> Comments</span>
									</p>
								</div>
								<!--/ date and comments -->
							</a>
						</div>
					<?php endforeach; ?>
					<!-- reset $post object -->
					<?php wp_reset_postdata(); ?>
					<!--/ reset $post object -->
				</div>
			</div>
		</section>
	<?php endif; ?>
	<!--/ section blog-posts -->
<?php endif; ?>