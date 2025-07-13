<?php
$image = get_field('dog_image_banner');
if( $image ): ?>
    <div id="dog-image-banner">
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    </div>
<?php endif;?>