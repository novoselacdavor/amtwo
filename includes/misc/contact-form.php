<?php
	// get data from options page - general fields
	// main contact and office text
	$main_form_title = get_field( 'main_form_title', 'option' );
	$office_title = get_field( 'office_title', 'option' );
	$office_street_address = get_field( 'office_street_address', 'option' );
	$office_telephone_number = get_field( 'office_telephone_number', 'option' );
	$office_email = get_field( 'office_email', 'option' );
	$main_contact_form_bg = get_field( 'main_contact_form_bg', 'option' );
	$main_contact_form_bg_src = $main_contact_form_bg['sizes']['1920x1080'];
?>
<section class="contact-form-container">
	<?php if( $main_contact_form_bg ): ?>
		<img src="<?php echo $main_contact_form_bg_src; ?>" alt="<?php echo $main_contact_form_bg['name']; ?>-image">
	<?php endif; ?>
	<div class="container">
		<div class="contact-form__inner">
			<div class="contact-form__form">
				<?php if( $main_form_title ): ?>
					<h2><?php echo $main_form_title; ?></h2>
				<?php endif; ?>
				<form action="" method="POST">
					<div class="form-item">
						<p class="form-item__name">
							<span class="icon-person"></span>
							<input type="text" name="name" id="name" placeholder="Name">
						</p>
						<p class="form-item__email">
							<span class="icon-email"></span>
							<input type="text" name="email" id="email" placeholder="Email">
						</p>
					</div>
					<div class="form-item">
						<p class="form-item__message">
							<span class="icon-message"></span>
							<textarea type="text" name="message" id="message" placeholder="Message"></textarea>
						</p>
					</div>
					<button type="submit" class="button button--whitebg-green">SEND</button>
				</form>
			</div>
			<div class="contact-form__contact-info">
				<?php if( $office_title ): ?>
					<h2><?php echo $office_title; ?></h2>
				<?php endif; ?>
				<div>
					<?php if( $office_street_address ): ?>
						<p>
							<span class="icon-home"></span>
							<span><?php echo $office_street_address; ?></span>
						</p>
					<?php endif; ?>
					<?php if( $office_telephone_number ): ?>
						<p>
							<span class="icon-phone"></span>
							<span>
								<a href="tel:<?php echo $office_telephone_number; ?>"><?php echo $office_telephone_number; ?></a>
							</span>
						</p>
					<?php endif; ?>
					<?php if( $office_email ): ?>
						<p>
							<span class="icon-mail"></span>
							<span>
								<a href="mailto:<?php echo $office_email; ?>"><?php echo $office_email; ?></a>
							</span>
						</p>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>