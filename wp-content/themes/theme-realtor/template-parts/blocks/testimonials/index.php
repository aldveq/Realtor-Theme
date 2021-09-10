<?php
    $testimonials_block_settings_title = get_field('testimonials_block_settings_title');
    $testimonials_block_settings_show_quote_icon = get_field('testimonials_block_settings_show_quote_icon');
    $testimonials_block_settings_layout = get_field('testimonials_block_settings_layout');

    $accent_color = get_field('color_palette_settings_accent_color', 'option');
?>

<section class="testimonials-container">
    <div class="container">
        <?php
            if(!empty($testimonials_block_settings_title)):
                ?>
                    <h1 class="testimonials-container__title"><?php echo $testimonials_block_settings_title; ?></h1>
                <?php
            else:
                ?>
                    <h1 class="testimonials-container__title">Your title here</h1>
                <?php
            endif;
        ?>

        <?php
            if ( $testimonials_block_settings_layout == 'three' && $testimonials_block_settings_show_quote_icon == 'no' ): // rating with three columns

                $the_ratings_three_column_query = new WP_Query(array(  
                    'post_type' => 'testimonial',
                    'post_status' => 'publish',
                    'posts_per_page' => -1
                ));

                $the_ratings_three_column_query_count = $the_ratings_three_column_query->found_posts;
                $swiper_navigation_desktop_avaibility = ($the_ratings_three_column_query_count <= 3) ? 'swiper-navigation-desktop-render' : '';

                ?>
                    <div class="swiper-container testimonials-container__swiper-container testimonials-container__swiper-container-ratings">
                        <div class="swiper-wrapper testimonials-container__swiper-wrapper">
                <?php

                if ($the_ratings_three_column_query->have_posts()) {
                    while($the_ratings_three_column_query->have_posts()) {
                        $the_ratings_three_column_query->the_post();
                        $ratings_three_column_the_title = get_the_title();
                        $ratings_three_column_rate_quantity = get_field('testimonials_rating', get_the_ID());
                        $ratings_three_column_rate_quantity_number = (int) $ratings_three_column_rate_quantity;
                        $ratings_three_column_is_source_available = get_field('testimonial_is_source_available', get_the_ID());
                        $ratings_three_column_source = get_field('testimonials_source', get_the_ID());
                        $ratings_three_column_the_excerpt = get_the_excerpt();

                        ?>
                            <div class="swiper-slide testimonials-container__swiper-slide">
                                <div class="card__wrap--inner testimonials-container__card-wrap-inner">
                                    <div class="card">
                                        <?php
                                            if(!empty($ratings_three_column_rate_quantity)):
                                                ?>
                                                    <div class="testimonials-container__rating-container">
                                                        <?php
                                                            $ratings_three_column_iteration = 0;
                                                            $ratings_three_column_remaining_to_5 = 5 - $ratings_three_column_rate_quantity_number;

                                                            echo get_total_ratings($ratings_three_column_rate_quantity_number, $ratings_three_column_remaining_to_5);
    
                                                        ?>
                                                    </div>      
                                                <?php
                                            endif;
                                        ?>
                                        <div class="card__item card__flexible">
                                            <?php
                                                if(!empty($ratings_three_column_the_excerpt)):
                                                    ?>
                                                        <p class="testimonials-container__desc"><?php echo $ratings_three_column_the_excerpt; ?></p>
                                                    <?php
                                                endif;
                                            ?>
                                        </div>
                                        <div class="card__footer testimonials-container__card-footer">
                                            <?php
                                                if($ratings_three_column_is_source_available == 'yes'):
                                                    ?>
                                                        <span class="testimonials-container__source-text"><?php echo $ratings_three_column_source; ?></span>
                                                    <?php
                                                endif;
                                            ?>
                                            <span class="testimonials-container__name"><?php echo $ratings_three_column_the_title; ?></span>
                                            <button class="button button__outline button__outline--small testimonials-container__card-button" style="color: <?php echo $accent_color; ?>;" onclick="getTestimonial(this, event)" data-testimonial-id="<?php echo the_ID(); ?>">Read more</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                
                    }
                }
                wp_reset_postdata();
                wp_reset_query();

                ?>
                            </div>
                        <div class="swiper-pagination testimonials-container__swiper-pagination testimonials-container__swiper-pagination-ratings <?php echo $swiper_navigation_desktop_avaibility; ?>"></div>
                    </div>
                <?php
                                        
            
            elseif ( $testimonials_block_settings_layout == 'two' && $testimonials_block_settings_show_quote_icon == 'no' ): // rating with two columns

                $the_ratings_three_column_query = new WP_Query(array(  
                    'post_type' => 'testimonial',
                    'post_status' => 'publish',
                    'posts_per_page' => -1
                ));

                $the_ratings_three_column_query_count = $the_ratings_three_column_query->found_posts;
                $swiper_navigation_desktop_avaibility = ($the_ratings_three_column_query_count <= 2) ? 'swiper-navigation-desktop-render' : '';

                ?>
                    <div class="swiper-container testimonials-container__swiper-container testimonials-container__swiper-container-ratings-two-cols-desktop">
                        <div class="swiper-wrapper testimonials-container__swiper-wrapper">
                <?php

                if ($the_ratings_three_column_query->have_posts()) {
                    while($the_ratings_three_column_query->have_posts()) {
                        $the_ratings_three_column_query->the_post();
                        $ratings_three_column_the_title = get_the_title();
                        $ratings_three_column_rate_quantity = get_field('testimonials_rating', get_the_ID());
                        $ratings_three_column_rate_quantity_number = (int) $ratings_three_column_rate_quantity;
                        $ratings_three_column_is_source_available = get_field('testimonial_is_source_available', get_the_ID());
                        $ratings_three_column_source = get_field('testimonials_source', get_the_ID());
                        $ratings_three_column_the_excerpt = get_the_excerpt();

                        ?>
                            <div class="swiper-slide testimonials-container__swiper-slide">
                                <div class="card__wrap--inner testimonials-container__card-wrap-inner">
                                    <div class="card">
                                        <?php
                                            if(!empty($ratings_three_column_rate_quantity)):
                                                ?>
                                                    <div class="testimonials-container__rating-container">
                                                        <?php
                                                            $ratings_three_column_iteration = 0;
                                                            $ratings_three_column_remaining_to_5 = 5 - $ratings_three_column_rate_quantity_number;

                                                            echo get_total_ratings($ratings_three_column_rate_quantity_number, $ratings_three_column_remaining_to_5);
    
                                                        ?>
                                                    </div>      
                                                <?php
                                            endif;
                                        ?>
                                        <div class="card__item card__flexible">
                                            <?php
                                                if(!empty($ratings_three_column_the_excerpt)):
                                                    ?>
                                                        <p class="testimonials-container__desc"><?php echo $ratings_three_column_the_excerpt; ?></p>
                                                    <?php
                                                endif;
                                            ?>
                                        </div>
                                        <div class="card__footer testimonials-container__card-footer">
                                            <?php
                                                if($ratings_three_column_is_source_available == 'yes'):
                                                    ?>
                                                        <span class="testimonials-container__source-text"><?php echo $ratings_three_column_source; ?></span>
                                                    <?php
                                                endif;
                                            ?>
                                            <span class="testimonials-container__name"><?php echo $ratings_three_column_the_title; ?></span>
                                            <button class="button button__outline button__outline--small testimonials-container__card-button" style="color: <?php echo $accent_color; ?>;" onclick="getTestimonial(this, event)" data-testimonial-id="<?php echo the_ID(); ?>">Read more</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                
                    }
                }
                wp_reset_postdata();
                wp_reset_query();

                ?>
                            </div>
                        <div class="swiper-pagination testimonials-container__swiper-pagination testimonials-container__swiper-pagination-ratings-two-cols-desktop <?php echo $swiper_navigation_desktop_avaibility; ?>"></div>
                    </div>
                <?php
            elseif ( $testimonials_block_settings_layout == 'three' && $testimonials_block_settings_show_quote_icon == 'yes' ): // quote with three columns
                
                $the_quote_three_column_query = new WP_Query(array(  
                    'post_type' => 'testimonial',
                    'post_status' => 'publish', 
                    'posts_per_page' => -1
                ));

                $the_quote_three_column_query_count = $the_quote_three_column_query->found_posts;
                $swiper_navigation_desktop_avaibility = ($the_quote_three_column_query_count <= 3) ? 'swiper-navigation-desktop-render' : '';

                ?>
                    <div class="swiper-container testimonials-container__swiper-container testimonials-container__swiper-container-quote">
                        <div class="swiper-wrapper testimonials-container__swiper-wrapper">
                <?php

                                if ($the_quote_three_column_query->have_posts()) {
                                    while($the_quote_three_column_query->have_posts()) {
                                        $the_quote_three_column_query->the_post();
                                        $quote_three_column_the_title = get_the_title();
                                        $quote_three_column_is_source_available = get_field('testimonial_is_source_available', get_the_ID());
                                        $quote_three_column_source = get_field('testimonials_source', get_the_ID());
                                        $quote_three_column_the_excerpt = get_the_excerpt();

                                        ?>
                                            <div class="swiper-slide testimonials-container__swiper-slide">
                                                <div class="card__wrap--inner testimonials-container__card-wrap-inner">
                                                    <div class="card">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="30" viewBox="0 0 48 30" class="testimonials-container__quote">
                                                            <path id="testimonial-quote" d="M38.49,0a4.014,4.014,0,0,0-3.6,2.22l-4.26,8.52A5.922,5.922,0,0,0,30,13.41V27a3.009,3.009,0,0,0,3,3H45a3.009,3.009,0,0,0,3-3V15a3.009,3.009,0,0,0-3-3H39l3.09-6.18A4.016,4.016,0,0,0,38.49,0Zm-30,0a4.014,4.014,0,0,0-3.6,2.22L.63,10.74A5.922,5.922,0,0,0,0,13.41V27a3.009,3.009,0,0,0,3,3H15a3.009,3.009,0,0,0,3-3V15a3.009,3.009,0,0,0-3-3H9l3.09-6.18A4.016,4.016,0,0,0,8.49,0Z" transform="translate(0 0)"/>
                                                        </svg>
                                                        <div class="card__item card__flexible">
                                                            <?php
                                                                if(!empty($quote_three_column_the_excerpt)):
                                                                    ?>
                                                                        <p class="testimonials-container__desc"><?php echo $quote_three_column_the_excerpt; ?></p>
                                                                    <?php
                                                                endif;
                                                            ?>
                                                        </div>
                                                        <div class="card__footer testimonials-container__card-footer">
                                                            <?php
                                                                if($quote_three_column_is_source_available == 'yes'):
                                                                    ?>
                                                                        <span class="testimonials-container__source-text"><?php echo $quote_three_column_source; ?></span>
                                                                    <?php
                                                                endif;
                                                            ?>
                                                            <span class="testimonials-container__name"><?php echo $quote_three_column_the_title; ?></span>
                                                            <button class="button button__outline button__outline--small testimonials-container__card-button" style="color: <?php echo $accent_color; ?>;" onclick="getTestimonial(this, event)" data-testimonial-id="<?php echo the_ID(); ?>">Read more</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                
                                    }
                                }
                                wp_reset_postdata();
                                wp_reset_query();

                ?>
                            </div>
                        <div class="swiper-pagination testimonials-container__swiper-pagination testimonials-container__swiper-pagination-quote <?php echo $swiper_navigation_desktop_avaibility; ?>"></div>
                    </div>
                <?php
            elseif ( $testimonials_block_settings_layout == 'two' && $testimonials_block_settings_show_quote_icon == 'yes' ): // quote with two columns

                $the_quote_three_column_query = new WP_Query(array(  
                    'post_type' => 'testimonial',
                    'post_status' => 'publish',
                    'posts_per_page' => -1
                ));

                $the_quote_three_column_query_count = $the_quote_three_column_query->found_posts;
                $swiper_navigation_desktop_avaibility = ($the_quote_three_column_query_count <= 2) ? 'swiper-navigation-desktop-render' : '';

                ?>
                    <div class="swiper-container testimonials-container__swiper-container testimonials-container__swiper-container-quote-two-cols-desktop">
                        <div class="swiper-wrapper testimonials-container__swiper-wrapper">
                <?php

                if ($the_quote_three_column_query->have_posts()) {
                    while($the_quote_three_column_query->have_posts()) {
                        $the_quote_three_column_query->the_post();
                        $quote_three_column_the_title = get_the_title();
                        $quote_three_column_is_source_available = get_field('testimonial_is_source_available', get_the_ID());
                        $quote_three_column_source = get_field('testimonials_source', get_the_ID());
                        $quote_three_column_the_excerpt = get_the_excerpt();

                        ?>
                            <div class="swiper-slide testimonials-container__swiper-slide">
                                <div class="card__wrap--inner testimonials-container__card-wrap-inner">
                                    <div class="card">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="30" viewBox="0 0 48 30" class="testimonials-container__quote">
                                            <path id="testimonial-quote" d="M38.49,0a4.014,4.014,0,0,0-3.6,2.22l-4.26,8.52A5.922,5.922,0,0,0,30,13.41V27a3.009,3.009,0,0,0,3,3H45a3.009,3.009,0,0,0,3-3V15a3.009,3.009,0,0,0-3-3H39l3.09-6.18A4.016,4.016,0,0,0,38.49,0Zm-30,0a4.014,4.014,0,0,0-3.6,2.22L.63,10.74A5.922,5.922,0,0,0,0,13.41V27a3.009,3.009,0,0,0,3,3H15a3.009,3.009,0,0,0,3-3V15a3.009,3.009,0,0,0-3-3H9l3.09-6.18A4.016,4.016,0,0,0,8.49,0Z" transform="translate(0 0)"/>
                                        </svg>
                                        <div class="card__item card__flexible">
                                            <?php
                                                if(!empty($quote_three_column_the_excerpt)):
                                                    ?>
                                                        <p class="testimonials-container__desc"><?php echo $quote_three_column_the_excerpt; ?></p>
                                                    <?php
                                                endif;
                                            ?>
                                        </div>
                                        <div class="card__footer testimonials-container__card-footer">
                                            <?php
                                                if($quote_three_column_is_source_available == 'yes'):
                                                    ?>
                                                        <span class="testimonials-container__source-text"><?php echo $quote_three_column_source; ?></span>
                                                    <?php
                                                endif;
                                            ?>
                                            <span class="testimonials-container__name"><?php echo $quote_three_column_the_title; ?></span>
                                            <button class="button button__outline button__outline--small testimonials-container__card-button" style="color: <?php echo $accent_color; ?>;" onclick="getTestimonial(this, event)" data-testimonial-id="<?php echo the_ID(); ?>">Read more</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                
                    }
                }
                wp_reset_postdata();
                wp_reset_query();

                ?>
                            </div>
                        <div class="swiper-pagination testimonials-container__swiper-pagination testimonials-container__swiper-pagination-quote-two-cols-desktop <?php echo $swiper_navigation_desktop_avaibility; ?>"></div>
                    </div>
                <?php
            endif;
            
        ?>

    </div>
</section>

<section class="testimonial-modal-window-wrapper" id="testimonialModalWindow">
    <div class="testimonial-modal-window-wrapper__container" data-quote-icon="<?php echo $testimonials_block_settings_show_quote_icon; ?>">
        <div class="testimonial-modal-window-wrapper__close-icon-container">
            <span id="testimonialModalWindowCloseIcon">&times;</span>
        </div>
        <div class="testimonials-container__rating-container testimonial-modal-window-wrapper__rating-container" id="testimonialRating"></div>
        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="30" viewBox="0 0 48 30" class="testimonials-container__quote testimonial-modal-window-wrapper__quote">
            <path id="testimonial-quote" d="M38.49,0a4.014,4.014,0,0,0-3.6,2.22l-4.26,8.52A5.922,5.922,0,0,0,30,13.41V27a3.009,3.009,0,0,0,3,3H45a3.009,3.009,0,0,0,3-3V15a3.009,3.009,0,0,0-3-3H39l3.09-6.18A4.016,4.016,0,0,0,38.49,0Zm-30,0a4.014,4.014,0,0,0-3.6,2.22L.63,10.74A5.922,5.922,0,0,0,0,13.41V27a3.009,3.009,0,0,0,3,3H15a3.009,3.009,0,0,0,3-3V15a3.009,3.009,0,0,0-3-3H9l3.09-6.18A4.016,4.016,0,0,0,8.49,0Z" transform="translate(0 0)"/>
        </svg>
        <div class="testimonial-modal-window-wrapper__content" id="testimonialContent"></div>
        <span class="testimonial-modal-window-wrapper__source" id="testimonialSource"></span>
        <span class="testimonial-modal-window-wrapper__author" id="testimonialName"></span>
        <button class="button button__outline button__outline--small testimonial-modal-window-wrapper__button" style="color: <?php echo $accent_color; ?>;" id="testimonialModalWindowCloseButton">Close</button>
    </div>
</section>