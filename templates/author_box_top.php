<div class="row">
	<div class="col-md-5 col-xs-12 text-center">
		<img src="<?php echo get_avatar_url( get_the_author_meta( 'ID' )); ?>" style="border-radius: 100%; vertical-align: middle; width: 70px;">
		<a href="/author/<?php echo get_the_author_meta('user_nicename'); ?>" style="margin-left: 10px;"><?php echo get_the_author_meta('display_name'); ?></a>
	</div>
	<div class="col-md-12" style="margin-top: 20px;">
		<?php get_template_part( 'sns' );?>
	</div>
</div>
