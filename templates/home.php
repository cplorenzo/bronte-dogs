<?php
/**
 * Template for displaying the home page
 *
 * @package Bronte_Dogs
 */
if ( have_rows('top_banner') ) : ?>
    <div id="home-banner">
        <div class="container">
            <?php while ( have_rows('top_banner') ) : the_row(); ?>
                <div class="home-banner-contents d-flex align-items-center">
                    <?php if ( get_row_layout() == 'banner' ) : ?>
                        <div class="col-md-5 d-flex flex-column justify-content-center h-100">
                            <h2><?php echo esc_html( get_sub_field('header_title') ); ?></h2>
                            <?php the_sub_field('description'); ?>
                            <?php if ( have_rows('buttons') ) : ?>
                                <ul class="buttons d-flex gap-2">
                                    <?php while ( have_rows('buttons') ) : the_row(); ?>
                                        <li class="list-unstyled">
                                            <a class="btn btn-primary" href="<?php echo esc_url( get_sub_field('button_link') ); ?>" role="button">
                                                <?php the_sub_field('button_label'); ?>
                                            </a>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-7">
                            <?php 
                            $image = get_sub_field('image_banner');
                            if( !empty( $image ) ): ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>

<?php if ( have_rows('google_reviews') ) : ?>
    <div id="google-reviews">
        <div class="container">
            <?php while ( have_rows('google_reviews') ) : the_row(); ?>
                <div class="google-reviews-contents d-flex flex-column">
                    <?php if ( get_row_layout() == 'google-reviews-block' ) : ?>
                        <h3><?php echo esc_html( get_sub_field('title') ); ?></h3>
                        <?php the_sub_field('intro'); ?>
                        <div class="review-shortcode">
                            <?php echo do_shortcode( get_sub_field('review_shortcode') ); ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>

<?php if ( have_rows('dog_needs') ) : ?>
    <div id="dog-needs">
        <div class="container">
            <?php while ( have_rows('dog_needs') ) : the_row(); ?>
                <div class="dog-needs-contents d-flex flex-row">
                    <?php if ( get_row_layout() == 'dog_needs_contents' ) : ?>
                        <div class="dog-needs-intro">
                            <h3><?php the_sub_field('title'); ?></h3>
                            <?php the_sub_field('intro'); ?>
                            <div class="packages d-flex flex-row">
                                <?php 
                                if( have_rows('packages') ):
                                    while( have_rows('packages') ) : the_row(); ?>
                                        <div class="package">
                                            <?php echo get_sub_field('package_name') . ': <span>' . get_sub_field('package_price') . '</span>'; ?>
                                        </div>
                                    <?php endwhile;
                                endif;    
                                ?>   
                            </div>
                            <div>
                                <a class="btn btn-primary" href="<?php echo esc_url( get_sub_field('button_link') ); ?>" role="button">
                                    <?php the_sub_field('button_label'); ?>
                                </a>
                            </div>
                        </div>
                        <div class="dog-needs-list row">
                            <?php 
                            if( have_rows('dog_need') ):
                                while( have_rows('dog_need') ) : the_row(); ?>
                                    <div class="dog-need-item col-md-6">
                                        <div class="d-flex align-items-start gap-3">
                                            <div class="dog-need-item-icon">
                                                <?php
                                                $image = get_sub_field('icon');
                                                if( !empty( $image ) ): ?>
                                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                <?php endif; ?>
                                            </div>
                                            <div class="dog-need-item-text">
                                                <h5 class="fw-bold mb-1"><?php the_sub_field('title'); ?></h5>
                                                <p class="mb-0 text-muted"><?php the_sub_field('description'); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile;
                            endif;    
                            ?>   
                        </div>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>


<?php
$image = get_field('dog_image_banner');
if( $image ): ?>
    <div id="dog-image-banner">
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    </div>
<?php endif;?>
