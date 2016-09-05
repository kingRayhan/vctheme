<?php

get_header(); ?>
<style>
header.entry-header {
    display: none;
}
footer.entry-footer {
    display: none;
}
footer#colophon {
    display: none;
}
@media screen and (min-width: 56.875em){
	.content-area {
	    float: none;
	    margin: auto;
	    width: 100%;
	}
}
</style>
<div id="primary" class="content-area">
	<main class="site-main">


		<div class="entry-content">
			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();
				the_content();
			endwhile;
			?>
		</div>

	</main><!-- .site-main -->

</div><!-- .content-area -->
<?php get_footer(); ?>
