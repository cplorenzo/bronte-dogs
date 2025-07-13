<?php
if ( have_rows('contact_form_section') ) : ?>
    <div id="contact-form-section">
        <div class="container">
            <?php while ( have_rows('contact_form_section') ) : the_row(); ?>
                <div class="contact-form-contents row align-items-center"> <!-- Added align-items-center -->
                    <?php if ( get_row_layout() == 'contact_form' ) : ?>
                        <div class="col-md-6 d-flex flex-column justify-content-center"> <!-- Added justify-content-center -->
                            <?php 
                            $image = get_sub_field('top_image');
                            if( !empty( $image ) ): ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="83" class="mb-4"/>
                            <?php endif; ?>
                            <h2 class="mb-3"><?php echo esc_html( get_sub_field('title') ); ?></h2>
                            <div class="description">
                                <?php the_sub_field('description'); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-wrapper">
                                <?php echo do_shortcode( get_sub_field('form_shortcode') ); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>