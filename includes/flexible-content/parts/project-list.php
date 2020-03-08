<?php if( get_row_layout() == 'projects_list' ): ?>
	<?php
		// data
		$projects = get_sub_field( 'projects' );
		$section_background = get_sub_field( 'section_background' );
		// get current projects showing and put their id-s in array
		$curr_project_list = array();
		foreach( $projects as $post ) {
			$curr_project_list[] = $post->ID;
		}
		// get all projects excluding these showing
		$args = array(
			'post_type'			=>	'project',
			'posts_per_page '	=>	-1,
			'post__not_in'		=>	$curr_project_list
		);
		$filtered_projects = new WP_Query( $args );
		// get the rest of projects after filtering through
		$rest_of_projects = array();
		foreach( $filtered_projects->posts as $data ) {
			$rest_of_projects[] = '<div class="projects_list__item">'.
								'<img src="'.get_the_post_thumbnail_url( $data, 'medium' ).'"'.
								'alt="'.$data->post_name.'-image">'.
								'</div>';
		}
		// pass rest of the projects to the js file
		wp_localize_script( 'main-script', 'rest_of_projects', $rest_of_projects );
	?>
	<?php if( $projects ): ?>
		<section class="layout__projects_list"
			<?php echo $section_background ? 'style="background-color:' . $section_background . ';"' : null ?>
		>
			<div class="container">
				<div class="projects_list__inner load-more-data-js">
					<?php foreach( $projects as $post ): ?>
						<?php
							// prepare data
							setup_postdata( $post );
						?>
						<div class="projects_list__item">
							<?php if( has_post_thumbnail() ): ?>
								<img src="<?php echo get_the_post_thumbnail_url( $post, 'medium' ); ?>" alt="<?php echo $post->post_name ?>-image">
							<?php endif; ?>
						</div>
					<?php endforeach; ?>
					<!-- reset $post object -->
					<?php wp_reset_postdata(); ?>
					<!--/ reset $post object -->
				</div>
				<!-- load more button -->
				<p>
					<a href="javascript: void(0)" class="button load-more-js">Load More</a>
				</p>
				<!--/ load more button -->
			</div>
		</section>
	<?php endif; ?>
<?php endif; ?>