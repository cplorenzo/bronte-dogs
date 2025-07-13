<?php
if (have_rows('sections')) :

    while (have_rows('sections')) : the_row();

        get_template_part('template-parts/sections/s-' . get_row_layout());

    endwhile;

endif;

get_template_part('template-parts/contact-form');

get_template_part('template-parts/dog-image-banner');

get_template_part('template-parts/google-reviews');
