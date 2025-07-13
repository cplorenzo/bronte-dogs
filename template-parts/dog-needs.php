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