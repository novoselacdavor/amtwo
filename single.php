<?php get_header(); ?>
<!-- page content -->

<!-- breadcrumbs -->
<?php if ( function_exists('yoast_breadcrumb') ): ?>
	<div class="grid-container">
		<?php yoast_breadcrumb( '<ul class="breadcrumbs"><li class="breadcrumbs__item">','</li></ul>' ); ?>
	</div>
<?php endif; ?>
<!--/ end breadcrumbs -->

<!-- check if there is a content -->
<?php if( have_posts() ): while( have_posts() ): the_post(); ?>
		<!-- content here -->
		<div class="grid-container">
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		</div>
		<!--/ end content -->
<?php endwhile; endif; ?>
<!-- end loop and end conditional -->

<!--/ page content -->
<?php get_footer(); ?>