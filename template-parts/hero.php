<?php
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