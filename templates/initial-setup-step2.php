<div class="wrap">
	<?php screen_icon(); ?>
	<h2><?php _e('Auth0 - Set your app token', WPA0_LANG); ?></h2>

    <p>Copy the token generated and paste in the following box:</p>

    <form method="post" action="<?php echo admin_url( 'admin.php' ); ?>">
        <input type="hidden" name="action" value="wpauth0_initialsetup_step2" />
        <input type="text" name="app_token" value="" autocomplete="off" />

		<p class="submit">
			<input type="submit" name="contiue" class="button button-primary" value="Save">
		</p>
    </form>

</div>