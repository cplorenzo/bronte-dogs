<?php 
if ( have_rows('google_reviews') ) : ?>
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
