<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package seogo
 */

get_header();
// $benifits        = ! empty( seogo_meta( 'benifits') ) ? seogo_meta( 'benifits') : 'N/A';

if( have_posts() ) {
    while( have_posts() ) : the_post();
    $case_cat = get_the_terms(get_the_ID(), 'case-cat');
    ?>

    <div class="case_details_area">
        <div class="container">
            <div class="border_bottom">
                <div class="row ">
                    <div class="col-xl-12">
                        <div class="details_title">
                            <span><?=$case_cat[0]->name?></span>
                            <h3><?=the_title()?></h3>
                        </div>
                    </div>
                    <?php
                        if ( has_post_thumbnail() ) {
                            $case_img = get_the_post_thumbnail( get_the_ID(), 'full', '', array( 'alt' => get_the_title() ) );
                            echo '
                            <div class="col-xl-12">
                                <div class="case_thumb">
                                    '.$case_img.'
                                </div>
                            </div>
                            ';
                        }
                    ?>
                    <div class="col-xl-9">
                        <div class="details_main_wrap">
                            <?php the_content()?>
                            <div class="single_details mb-60">
                                <?php echo seogo_social_sharing_buttons('','',true)?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php 

    seogo_related_cases( get_the_ID() );
    endwhile;
}

// Footer============
get_footer();