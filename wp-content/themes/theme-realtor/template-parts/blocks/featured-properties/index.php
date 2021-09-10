<?php
    $featured_properties = get_featured_properties();
    $featured_properties_count = 1;
    $featured_properties_title = get_field('featured_properties_title');
    $featured_properties_is_link_available = get_field('featured_properties_is_link_available');

    $accent_color = get_field('color_palette_settings_accent_color', 'option');

?>

<section class="properties-container">
    <div class="container">
        <?php
            if(!empty($featured_properties_title)): 
                ?>
                    <h2 class="properties-container__main-title"><?php echo $featured_properties_title; ?></h2>
                <?php
            else: 
                ?>
                    <h2 class="properties-container__main-title">Your title here</h2>
                <?php
            endif;
        ?>
        <div class="card__wrap--outer properties-container__cards-wrapper">

            <?php 
                if(!empty($featured_properties)):
                    foreach($featured_properties as $f_prop) {
                        ?>
                             <div class="card__wrap--inner properties-container__cards-inner-wrapper">
                                <div class="card properties-container__card">

                                    <div class="swiper-container swiper-container-featured-properties-<?php echo $featured_properties_count++; ?>">
                                        
                                        <div class="swiper-wrapper">
                                            <?php
                                                foreach( $f_prop['images'] as $f_prop_image => $f_prop_image_value) {
                                                    if(!is_numeric($f_prop_image_value)):
                                                        ?>
                                                            <div class="swiper-slide">
                                                                <img src="<?php echo $f_prop_image_value->{'url'}; ?>" class="card__image properties-container__image" />
                                                            </div>
                                                        <?php
                                                    endif;  
                                                }
                                            ?>
                                        </div>

                                        <div class="swiper-pagination swiper-pagination-featured-properties-<?php echo $featured_properties_count++; ?>"></div>

                                        <div class="swiper-button-next swiper-button-next-featured-properties-<?php echo $featured_properties_count++; ?>"></div>
                                        <div class="swiper-button-prev swiper-button-prev-featured-properties-<?php echo $featured_properties_count++; ?>"></div>
                                    </div>

                                    <div class="card__item card__flexible properties-container__flexible">
                                        <div class="properties-container__address-container">
                                            <span class="properties-container__address-one"><?php echo $f_prop['address']; ?></span>
                                            <span class="properties-container__address-two"><?php echo $f_prop['location']; ?></span>
                                        </div>
                                        <div class="properties-container__price-container">
                                            <span class="properties-container__price"><?php echo $f_prop['price']; ?> USD</span>
                                        </div>
                                    </div>
                                    <div class="card__footer properties-container__footer">
                                        <div class="properties-container__details-container">
                                            <svg width="20" height="14" fill="none" xmlns="http://www.w3.org/2000/svg" class="properties-container__detail-svg-image"><path d="M19 5.78V3c0-1.65-1.35-3-3-3h-4c-.77 0-1.47.3-2 .78C9.47.3 8.77 0 8 0H4C2.35 0 1 1.35 1 3v2.78C.39 6.33 0 7.12 0 8v5c0 .55.45 1 1 1s1-.45 1-1v-1h16v1c0 .55.45 1 1 1s1-.45 1-1V8c0-.88-.39-1.67-1-2.22zM12 2h4c.55 0 1 .45 1 1v2h-6V3c0-.55.45-1 1-1zM3 3c0-.55.45-1 1-1h4c.55 0 1 .45 1 1v2H3V3zm-1 7V8c0-.55.45-1 1-1h14c.55 0 1 .45 1 1v2H2z" fill="#AAADC3"></path></svg>
                                            <span class="properties-container__details-text"><?php echo $f_prop['bedrooms']; ?></span>
                                        </div>
                                        <div class="properties-container__details-container">
                                            <svg width="22" height="17" fill="none" xmlns="http://www.w3.org/2000/svg" class="properties-container__detail-svg-image">
                                                <path d="M20.302 8.342h-.132V3.093A2.196 2.196 0 0017.977.9c-.927 0-1.713.583-2.032 1.395h-.294a.797.797 0 100 1.596h1.86a.797.797 0 00.529-1.392.597.597 0 01.534.594v5.249H1.698a.797.797 0 100 1.595H2.76V11c0 1.494.729 2.816 1.844 3.636l-.447.447a.793.793 0 000 1.127.802.802 0 00.564.234c.202 0 .41-.08.564-.234l.847-.847c.367.095.748.151 1.147.151h7.442c.399 0 .78-.056 1.147-.151l.847.847a.802.802 0 00.564.234c.202 0 .41-.08.564-.234a.793.793 0 000-1.128s0 0 0 0l-.447-.446A4.506 4.506 0 0019.239 11V9.937H20.302a.797.797 0 100-1.595zM17.644 11a2.93 2.93 0 01-2.923 2.923H7.279A2.93 2.93 0 014.356 11V9.937h13.288V11z" fill="#AAADC3" stroke="#AAADC3" stroke-width="0.2"></path>
                                            </svg>
                                            <span class="properties-container__details-text"><?php echo $f_prop['bathrooms']; ?></span>
                                        </div>
                                        <div class="properties-container__details-container">
                                            <svg width="20" height="17" fill="none" xmlns="http://www.w3.org/2000/svg" class="properties-container__detail-svg-image"><path d="M17 9h1.7c.46 0 .68-.57.33-.87L10.67.6c-.38-.34-.96-.34-1.34 0L.97 8.13c-.34.3-.13.87.33.87H3v3H2c-.55 0-1 .45-1 1s.45 1 1 1h1v2c0 .55.45 1 1 1s1-.45 1-1v-2h4v2c0 .55.45 1 1 1s1-.45 1-1v-2h4v2c0 .55.45 1 1 1s1-.45 1-1v-2h1c.55 0 1-.45 1-1s-.45-1-1-1h-1V9zM5 12V7.19l4-3.6V12H5zm6 0V3.59l4 3.6V12h-4z" fill="#AAADC3"></path></svg>
                                            <span class="properties-container__details-text"><?php echo $f_prop['lotSqft']; ?></span>
                                            <span class="properties-container__details-text">Sq Ft</span>
                                        </div>
                                        <div class="properties-container__details-container">
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" class="properties-container__detail-svg-image" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve">
                                                <g id="Layer_5">
                                                    <g>
                                                        <path class="st0" d="M20.9,19.8l-3-3c-0.2-0.2-0.4-0.2-0.6-0.2s-0.4,0.1-0.6,0.2c-0.2,0.2-0.2,0.4-0.2,0.6c0,0.2,0.1,0.4,0.2,0.6
                                                            l0.9,0.9c0.1,0.1,0.2,0.3,0.1,0.4s-0.2,0.2-0.4,0.2H4.8c-0.2,0-0.4-0.2-0.4-0.4V6.6c0-0.2,0.1-0.3,0.3-0.4c0.2-0.1,0.3,0,0.4,0.1
                                                            l1.4,1.4C6.7,7.9,6.9,8,7.1,8c0,0,0,0,0,0c0.2,0,0.4-0.1,0.6-0.2c0.2-0.2,0.2-0.4,0.2-0.6S7.9,6.8,7.7,6.6L4.2,3.1
                                                            C3.9,2.8,3.6,2.8,3.3,2.9C3,3,2.9,3.3,2.9,3.6v16.8c0,0.4,0.3,0.8,0.8,0.8h16.8c0.3,0,0.6-0.2,0.7-0.5
                                                            C21.2,20.4,21.1,20.1,20.9,19.8z"/>
                                                        <path class="st0" d="M8.8,9.8C8.9,9.9,9.1,10,9.3,10s0.4-0.1,0.5-0.2C9.9,9.6,10,9.5,10,9.3S9.9,8.9,9.8,8.8L9.5,8.4
                                                            c-0.3-0.3-0.7-0.3-1,0c-0.3,0.3-0.3,0.7,0,1L8.8,9.8z"/>
                                                        <path class="st0" d="M13,14c0.1,0.1,0.3,0.2,0.5,0.2c0.2,0,0.4-0.1,0.5-0.2c0.3-0.3,0.3-0.7,0-1l-0.3-0.3c-0.3-0.3-0.7-0.3-1,0
                                                            c-0.3,0.3-0.3,0.7,0,1L13,14z"/>
                                                        <path class="st0" d="M10.9,11.9c0.1,0.1,0.3,0.2,0.5,0.2s0.4-0.1,0.5-0.2c0.3-0.3,0.3-0.7,0-1l-0.3-0.3c-0.3-0.3-0.7-0.3-1,0
                                                            c-0.3,0.3-0.3,0.7,0,1L10.9,11.9z"/>
                                                        <path class="st0" d="M15.1,16.1c0.1,0.1,0.3,0.2,0.5,0.2c0.2,0,0.4-0.1,0.5-0.2c0.3-0.3,0.3-0.7,0-1l-0.3-0.3
                                                            c-0.3-0.3-0.7-0.3-1,0c-0.3,0.3-0.3,0.7,0,1L15.1,16.1z"/>
                                                    </g>
                                                </g>
                                                <g id="Layer_3">
                                                </g>
                                            </svg>
                                            <span class="properties-container__details-text"><?php echo $f_prop['acres']; ?></span>
                                            <span class="properties-container__details-text">Acre lot</span>
                                        </div>
                                    </div>
                                    <div class="card__footer properties-container__footer properties-container__footer--link-container">
                                        <a href="<?php echo $f_prop['details']; ?>" class="button button__outline button__outline--small" target="_self" style="color: <?php echo $accent_color; ?>;">View Details</a>
                                    </div>
                                </div>
                            </div>
                        <?php
                    }
                else: 
                    ?>
                        <h1>There is not featured properties available</h1>
                    <?php
                endif;
            ?>

        </div>
        <?php
            if(!empty($featured_properties_is_link_available) && $featured_properties_is_link_available == 'yes'):
                $featured_properties_link = get_field('featured_properties_link');
                $featured_properties_link_target = $featured_properties_link['target'] ? $featured_properties_link['target'] : '_self';
                ?>
                    <div class="properties-container__button-container">
                        <a href="<?php echo $featured_properties_link['url']; ?>" class="button button__outline button__icon button__outline--right-arrow" target="<?php echo $featured_properties_link_target; ?>" style="color: <?php echo $accent_color; ?>;"><?php echo $featured_properties_link['title']; ?>
                            <span>
                                <svg class="button__outline--right-arrow button__outline--right-arrow-icon" width="20" height="14" viewBox="0 0 20 14" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.29 0.70998C11.9 1.09998 11.9 1.72998 12.29 2.11998L16.17 5.99998H1C0.45 5.99998 0 6.44998 0 6.99998C0 7.54998 0.45 7.99998 1 7.99998H16.18L12.3 11.88C11.91 12.27 11.91 12.9 12.3 13.29C12.69 13.68 13.32 13.68 13.71 13.29L19.3 7.69998C19.69 7.30998 19.69 6.67998 19.3 6.28998L13.7 0.70998C13.32 0.31998 12.68 0.31998 12.29 0.70998Z"></path>
                                </svg>
                            </span>
                        </a>  
                    </div>
                <?php
            endif;
        ?>
    </div>
</section>