<?php
/**
* Template Name: Page - Team
* @package knowlenursery26
*/

get_header(); ?>

<section class="templ--page-main">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-md-10 col-lg-8">
				<div>
                    <figure>
                        <img src="<?php the_field('kns_logo', 'option'); ?>" class="img-fluid">   
                    </figure>
                </div>
                <div>
                    <?php get_template_part('buildingblock'); ?>
                </div>
                <div class="row">
                    <div class="col-12">
                    <?php while(has_sub_field("team_member")): ?>
                        <?php if(get_row_layout() == 'team'): // layout: Team Member ?>
                            <div class="row team-member">
                                <div class="col-12 col-md-4">
                                    <figure>
                                        <img class="border-shadow img-fluid" src="<?php the_sub_field('photo'); ?>" alt="<?php the_sub_field('name'); ?>" />
                                    </figure>
                                </div>
                                <div class="col-12 col-md-8">
                                    <h2 class="team"><?php the_sub_field('name'); ?></h2>
                                    <h5><?php the_sub_field('job_description1'); ?>
                                        <?php if( get_sub_field('job_description2') ): ?>
                                            <br /><?php the_sub_field('job_description2'); ?>
                                        <?php endif; ?>
                                    </h5>
                                    <div><?php the_sub_field('blurb'); ?></div>
                                </div>
                            </div><!-- end .row -->
                        <?php endif; ?>
                    <?php endwhile; ?>
                    </div>
                </div><!-- end .row -->

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