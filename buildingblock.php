<?php /* Building Block for pages with sidebar navigation / Template Part */ ?>

<!-- Hide Page Title from view -->
<?php /*
<div class="row">
    <div class="small-12 large-12 columns">
        <h1><?php the_title(); ?></h1>
    </div>
</div><!-- end .row -->
*/ ?>

<?php while(has_sub_field("new_page_content")): ?>
    <?php if(get_row_layout() == 'subheading'): // layout: Subheading ?>
        <div class="row">
            <div class="col-12">
               <h3><?php the_sub_field('heading'); ?></h3>
            </div>
        </div><!-- end .row -->
    <?php endif; ?>


    <?php if(get_row_layout() == 'introduction_full_width'): // layout: Introduction - Full Width ?>
        <div class="row">
            <div class="col-12 mb-2">
               <p class="introduction"><?php the_sub_field('introduction'); ?></p>
            </div>
        </div><!-- end .row -->
    <?php endif; ?>


    <?php if(get_row_layout() == 'paragraph_full_width'): // layout: Paragraph - Full Width ?>
        <div class="row">
            <div class="col-12">
               <?php the_sub_field('paragraph'); ?>
            </div>
        </div><!-- end .row -->
    <?php endif; ?>


    <?php if(get_row_layout() == 'image_full_width'): // layout: Image / Caption - Full Width ?>
        <div class="row image-full-width">
            <div class="col-12">
                <figure>
                    <img class="border-shadow img-fluid" src="<?php the_sub_field('image'); ?>">
                    <figcaption class="caption"><?php the_sub_field('caption'); ?></figcaption>
                </figure>
            </div>
        </div><!-- end .row -->
    <?php endif; ?>


    <?php if(get_row_layout() == 'imageleft_pararight'): // layout: Image Left / Paragraph Right ?>
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <figure>
                            <img class="border-shadow img-fluid" src="<?php the_sub_field('imageleft'); ?>">
                            <figcaption class="caption"><?php the_sub_field('captionleft'); ?></figcaption>
                        </figure>
                    </div>
                    <div class="col-md-6">
                        <?php the_sub_field('pararight'); ?>
                    </div>
                </div><!-- end .row -->
            </div>
        </div><!-- end .row -->
    <?php endif; ?>


    <?php if(get_row_layout() == 'paraleft_imageright'): // layout: Paragraph Left / Image Left ?>
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <?php the_sub_field('paraleft'); ?>
                    </div>
                    <div class="col-12 col-md-6">
                        <figure>
                            <img class="border-shadow img-fluid" src="<?php the_sub_field('imageright'); ?>">
                            <figcaption class="caption"><?php the_sub_field('captionright'); ?></figcaption>
                        </figure>
                    </div>
                </div><!-- end .row -->
            </div>
        </div><!-- end .row -->
    <?php endif; ?>


    <?php if(get_sub_field('site') == "vimeo"): // If Vimeo Selected ?>
        <div class="row">
            <div class="col-12">
                <div class="ratio ratio-16x9" style="background-color: rgba(0,0,0,0.1);">
                    <iframe src="//player.vimeo.com/video/<?php the_sub_field('vimeo_link'); ?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </div>
        </div><!-- end .row -->
    <?php endif; ?>


    <?php if(get_sub_field('site') == "youtube"): // If YouTube Selected ?>
         <div class="row">
            <div class="col-12">
                <div class="ratio ratio-16x9">
                    <iframe src="//www.youtube.com/embed/<?php the_sub_field('youtube_link'); ?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </div>
        </div><!-- end .row -->
    <?php endif; ?>


    <?php if(get_row_layout() == 'pullout_quote'): // layout: Pullout / Quote ?>
        <div class="row">
            <div class="col-12">
            	<div class="pullout">
                	<h5><?php the_sub_field('pullout'); ?></h5>
                </div>
            </div>
        </div><!-- end .row -->
    <?php endif; ?>

    <?php if(get_row_layout() == 'spoken_quote'): // layout: Spoken / Quote ?>
        <div class="row">
            <div class="col-1">
                <figure>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/knowle-icon-quote.png" alt="Quote Icon">
                </figure>
            </div>
            <div class="col-11">
                <div class="spoken">
                    <p><?php the_sub_field('spoken'); ?></p><!-- Tweak HTML tag from H5 -->
                </div>
            </div>
        </div><!-- end .row -->
    <?php endif; ?>


    <?php if(get_row_layout() == 'page_break'): // layout: Page Break ?>
        <div class="row">
            <div class="col-12">
                <?php if( get_sub_field('break') )
                {
                    echo "<hr />";
                }
                ?>
            </div>
        </div><!-- end .row -->
    <?php endif; ?>


    <?php if(get_row_layout() == 'bullet_list'): // layout: Bulleted List 
        $rows = get_sub_field('bullet_point'); //Repeater Field Name ?>
        <div class="row">
            <div class="col-12">
                <?php if( get_sub_field('introduction_para') ): ?>
                    <p><?php the_sub_field('introduction_para'); ?></p>
                <?php endif; ?>

                <div class="bullet">
                    <?php if ($rows){ 
                    echo '<ul>';
                    foreach($rows as $row){
                        echo '<li>'.$row['list_item'].'</li>'; 
                    }
                    echo '</ul>';
                    } ?>
                </div>
                
                <?php if( get_sub_field('conclusion_para') ): ?> 
                    <p><?php the_sub_field('conclusion_para'); ?></p>
                <?php endif; ?>
            </div>
        </div><!-- end .row -->
    <?php endif; ?>


    <?php if(get_row_layout() == 'footnote'): // layout: Footnote ?>
    <div class="row footnote">
        <div class="col-12">
            <div class="break">
                <p class="note"><?php the_sub_field('note'); ?></p><!-- Tweak HTML tag from H5 -->
            </div>
        </div>
    </div><!-- end .row -->
    <?php endif; ?>
<?php endwhile; ?>