
<?php
	/**
	 * Blog single page posts navigation
	 */

post_author();
?>

<?php

	/**
	 * Blog single page posts navigation
	 */

	$blog_nav_show = Edubin::setting( 'blog_nav_show' );
	$blog_related_show = Edubin::setting( 'blog_related_show' );

	if ( $blog_nav_show ) {
		nav_page_links(); 
	}

	/**
	 * Blog single page related posts
	 */

	if ( $blog_related_show ) { ?>
		
	<div class="related-post-wrap ">
		<?php edubin_related_posts(); ?>
	</div>

<?php
	}
?>