<style type="text/css">
.cvbtn {
	padding: 10 0;
	display: block;
	background: #ff5a5f;
	color: #fff;
	text-align: center;
	border-bottom: solid 3px #b3313c;
	text-decoration: none;
	font-weight: 600;
	font-size: 14px;
}

a.cvbtn:hover {
		text-decoration: none !important;
		color: #fff !important;
	}
</style>

<div class="row" style="background: #f2f2f2; padding-top: 30px; border-top: 3px solid #45caf9">
	<div class="col-md-5 col-xs-12 text-center">
		<img src="<?php echo get_avatar_url( get_the_author_meta( 'ID' )); ?>" style="border-radius: 100%; vertical-align: middle;">
		<a href="/author/<?php echo get_the_author_meta('display_name'); ?>" style="margin-left: 10px;"><?php echo the_author(); ?></a>
	</div>
	<div class="col-md-7 col-xs-12">
	<?php echo get_the_author_meta('description'); ?>"
		<div class="col-md-12 col-xs-12" style="padding: 0; margin-top: 10px;">
			<a href="/contact" class="cvbtn"><i class="fa fa-envelope-o"></i>  無料でプロに相談する</a>
		</div>
	</div>
	<div class="col-md-12" style="margin-top: 20px;">
		<?php get_template_part( 'sns' );?>
	</div>
</div>