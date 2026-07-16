<?php
/**
* The template for displaying all pages.
* @package knowlenursery26
*/

get_header(); ?>

<section class="templ--page-main">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-md-10 col-lg-12">
				<div>
                    <figure>
                        <img src="<?php the_field('kns_logo', 'option'); ?>" class="img-fluid">   
                    </figure>
                </div>
			</div>
			<div class="col-12 col-md-10 col-lg-8">
				<div class="pe-md-5">
					<?php while (have_posts()) : the_post(); ?>
						<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
							<?php get_template_part('buildingblock'); ?>
						</article>
					<?php endwhile; // End the loop ?>
				</div>
			</div>
			<?php get_sidebar(); ?>

		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-md-10 col-lg-12">
				<p class="copyright">&copy; <?php echo date('Y'); ?>. All rights reserved. Knowle Nursery School.</p>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>