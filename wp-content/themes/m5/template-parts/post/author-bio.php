<?php 

global $post;
$author_id = $post->post_author;
if (pll_current_language('slug') == 'vi') {

    $authordesc = get_the_author_meta( 'description', $author_id );
} elseif (pll_current_language('slug') == 'en') {

    $authordesc = get_the_author_meta( 'description_en', $author_id );
} else {

    $authordesc = get_the_author_meta( 'description_zh', $author_id );
}
if ( ! empty ( $authordesc ) ) { ?>
	<div class="post-author">
		<div class="author-img"> 
			<?php echo get_avatar( get_the_author_meta('email'), '100' ); ?>
		</div>
		<div class="author-content">
			<h5><?php echo get_the_author(); ?></h5>
			<p><?php echo $authordesc; ?></p> 
			<!-- <a target="_blank" class="author-social" href=""><i class="fa fa-globe"></i></a> 
			<a target="_blank" class="author-social" href=""><i class="fa fa-facebook"></i></a> 
			<a target="_blank" class="author-social" href=""><i class="fa fa-twitter"></i></a> 
			<a target="_blank" class="author-social" href=""><i class="fa fa-google-plus"></i></a> 
			<a target="_blank" class="author-social" href=""><i class="fa fa-instagram"></i></a> 
			<a target="_blank" class="author-social" href=""><i class="fa fa-pinterest"></i></a> 
			<a target="_blank" class="author-social" href=""><i class="fa fa-tumblr"></i></a> -->
		</div>
	</div>
<?php } ?>