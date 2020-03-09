<?php if( have_rows( 'layout' ) ): while( have_rows( 'layout' ) ): the_row(); ?>

	<?php include get_theme_file_path( 'includes/flexible-content/parts/only-text.php' ); ?>

	<?php include get_theme_file_path( 'includes/flexible-content/parts/image-title-text.php' ); ?>

	<?php include get_theme_file_path( 'includes/flexible-content/parts/project-list.php' ); ?>
	
	<?php include get_theme_file_path( 'includes/flexible-content/parts/team-member-list.php' ); ?>

	<?php include get_theme_file_path( 'includes/flexible-content/parts/review-list.php' ); ?>

	<?php include get_theme_file_path( 'includes/flexible-content/parts/image-external-link.php' ); ?>

	<?php include get_theme_file_path( 'includes/flexible-content/parts/blog-posts.php' ); ?>

<?php endwhile; endif; ?>
