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
			<?php if(is_page('contact-us')) { ?>
				<div data-tf-live="01J7K20JBWHS4Y9KSW4EVRAP31"></div><script src="//embed.typeform.com/next/embed.js"></script><!--
				<div class="typeform-widget" data-url="https://robin174.typeform.com/to/s8QHmg" data-transparency="100" data-hide-headers=true data-hide-footer=true style="width: 100%; height: 600px; background-color:rgba(0,0,0,0.05);"></div> <script> (function() { var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id="typef_orm", b="https://embed.typeform.com/"; if(!gi.call(d,id)) { js=ce.call(d,"script"); js.id=id; js.src=b+"embed.js"; q=gt.call(d,"script")[0]; q.parentNode.insertBefore(js,q) } })() </script> <div style="font-family: Sans-Serif;font-size: 12px;color: #999;opacity: 0.5; padding-top: 5px;"> powered by <a href="https://admin.typeform.com/signup?utm_campaign=s8QHmg&utm_source=typeform.com-2924107-Basic&utm_medium=typeform&utm_content=typeform-embedded-poweredbytypeform&utm_term=EN" style="color: #999" target="_blank">Typeform</a> </div>
				-->
			<?php } ?>
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