<!-- data check -->
<?php if( have_rows( 'layout' ) ): while( have_rows( 'layout' ) ): the_row(); ?>

	<!-- section only text -->
	<?php include get_theme_file_path( 'includes/flexible-content/parts/only-text.php' ); ?>
	<!--/ section only text -->

	<!-- section only text -->
	<?php include get_theme_file_path( 'includes/flexible-content/parts/image-title-text.php' ); ?>
	<!--/ section only text -->

	<!-- section only text -->
	<?php include get_theme_file_path( 'includes/flexible-content/parts/project-list.php' ); ?>
	<!--/ section only text -->

	<!-- section only text -->
	<?php include get_theme_file_path( 'includes/flexible-content/parts/team-member-list.php' ); ?>
	<!--/ section only text -->

	<!-- section only text -->
	<?php include get_theme_file_path( 'includes/flexible-content/parts/review-list.php' ); ?>
	<!--/ section only text -->


<?php endwhile; endif; ?>
<!--/ end data check -->