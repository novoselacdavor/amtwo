<?php if( get_row_layout() == 'team_member_list' ): ?>
	<?php
		// data
		$members = get_sub_field( 'members' );
		$section_background = get_sub_field( 'section_background' );
	?>
	<?php if( $members ): ?>
		<section class="layout__team_member_list"
			<?php echo $section_background ? 'style="background-color:' . $section_background . ';"' : null ?>
		>
			<div class="container">
				<div class="team_member_list__inner">
					<?php foreach( $members as $post ): ?>
						<?php
							// prepare data
							setup_postdata( $post );
							// data
							$fb = get_field( 'facebook' );
							$em = get_field( 'email' );
							$tw = get_field( 'twitter' );
							$pi = get_field( 'pinterest' );
						?>
						<div class="team_member_list__item">
							<?php if( has_post_thumbnail() ): ?>
								<img src="<?php echo get_the_post_thumbnail_url( $post, 'medium' ); ?>" alt="<?php echo $post->post_name ?>-image">
							<?php endif; ?>
							<div class="team_member_list__social">
								<h3><?php the_title() ?></h3>
								<?php if( $fb ): ?>
								<p>
									<a href="<?php echo $fb; ?>">
										<span class="icon-facebook"></span>
									</a>
								</p>
								<?php endif; ?>
								<?php if( $em ): ?>
								<p>
									<a href="mailto:<?php echo $em; ?>">
										<span class="icon-rss"></span>
									</a>
								</p>
								<?php endif; ?>
								<?php if( $tw ): ?>
								<p>
									<a href="<?php echo $tw; ?>">
										<span class="icon-twitter"></span>
									</a>
								</p>
								<?php endif; ?>
								<?php if( $pi ): ?>
								<p>
									<a href="<?php echo $pi; ?>">
										<span class="icon-pinterest1"></span>
									</a>
								</p>
								<?php endif; ?>
							</div>
						</div>
					<?php endforeach; ?>
					<!-- reset $post object -->
					<?php wp_reset_postdata(); ?>
					<!--/ reset $post object -->
				</div>
			</div>
		</section>
	<?php endif; ?>
<?php endif; ?>