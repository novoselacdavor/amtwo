<?php
	// social links
	$title = get_field( 'title', 'option' );
	$facebook = get_field( 'facebook', 'option' );
	$email = get_field( 'email', 'option' );
	$twitter = get_field( 'twitter', 'option' );
	$pinterest = get_field( 'pinterest', 'option' );
	$dribbble = get_field( 'dribbble', 'option' );
	$vimeo = get_field( 'vimeo', 'option' );
?>

<section class="social-links-container">
	<div class="container">
		<div class="social-links__inner">
			<?php if( $title ): ?>
				<h2><?php echo $title; ?></h2>
			<?php endif; ?>
			<div>
				<?php if( $facebook ): ?>
					<a href="<?php echo $facebook; ?>" class="color-fb">
						<span class="icon-facebook"></span>
					</a>
				<?php endif; ?>
				<?php if( $email ): ?>
					<a href="mailto:<?php echo $email; ?>" class="color-rss">
						<span class="icon-rss"></span>
					</a>
				<?php endif; ?>
				<?php if( $twitter ): ?>
					<a href="<?php echo $twitter; ?>" class="color-tw">
						<span class="icon-twitter"></span>
					</a>
				<?php endif; ?>
				<?php if( $pinterest ): ?>
					<a href="<?php echo $pinterest; ?>" class="color-pi">
						<span class="icon-pinterest1"></span>
					</a>
				<?php endif; ?>
				<?php if( $dribbble ): ?>
					<a href="<?php echo $dribbble; ?>" class="color-dr">
						<span class="icon-dribbble"></span>
					</a>
				<?php endif; ?>
				<?php if( $vimeo ): ?>
					<a href="<?php echo $vimeo; ?>" class="color-vi">
						<span class="icon-vimeo"></span>
					</a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>