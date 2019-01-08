<div class="row" style="background: #f2f2f2; padding-top: 30px; border-top: 3px solid #45caf9">
	<div class="col-md-5 col-xs-12 text-center">
		<img src="<?php echo get_avatar_url( get_the_author_meta( 'ID' )); ?>" style="border-radius: 100%; vertical-align: middle;">
		<a href="/author/<?php echo get_the_author_meta('display_name'); ?>" style="margin-left: 10px;"><?php echo the_author(); ?></a>
	</div>
	<div class="col-md-7 col-xs-12 text-center">
	</div>
	<div class="col-md-12" style="margin-top: 20px;">
		<?php get_template_part( 'sns' );?>
	</div>
</div>