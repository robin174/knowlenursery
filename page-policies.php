<?php
/**
* Template Name: Page - Policies
* @package knowlenursery26
*/

get_header(); ?>

<section class="templ--page-main">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-md-10 col-lg-8">
				<div class="mt-2 mt-md-1">
                    <figure>
                        <img src="<?php the_field('kns_logo', 'option'); ?>" class="img-fluid">   
                    </figure>
                </div>
                <div>
				    <?php get_template_part('buildingblock'); ?>
                </div>
                <div>
                     <?php if( have_rows('pdf') ): ?>
                        <ul>
                        <?php while( have_rows('pdf') ): the_row(); 
                            $title = get_sub_field('pdf_title');
                            $link = get_sub_field('pdf_file');
                            ?>
                            <li>
                                <?php if( $link ): ?>
                                    <a href="<?php echo $link; ?>" alt="<?php echo $title; ?>" target="_blank"><?php echo $title; ?> (PDF)</a>
                                <?php endif; ?>
                            </li>
                        <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
                </div>
                <div>
                    <?php if(is_page('policies')): { ?>
                        <p style="font-size:90%;">
                            ---<br>
                            <i>Page last updated: <?php the_modified_date(); ?></i><p>
                    <?php } endif; ?>
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