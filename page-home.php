<?php
/**
* Template Name: Page - Home
* @package knowlenursery26
*/

get_header(); ?>

<section class="templ--page-main">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-md-10 col-lg-8">
				<div class="mt-3 mt-md-1">
                    <figure>
                        <img src="<?php the_field('kns_logo', 'option'); ?>" class="img-fluid">   
                    </figure>
                </div>
				<div>
					<?php get_template_part('buildingblock'); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-md-10 col-lg-8">
				<p class="copyright">&copy; <?php echo date('Y'); ?>. All rights reserved. Knowle Nursery School.</p>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>