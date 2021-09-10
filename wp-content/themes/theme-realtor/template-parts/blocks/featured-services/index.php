<?php
    $dream_houses_title = get_field('dream_houses_title');
    $dream_houses_description = get_field('dream_houses_description');

    $accent_color = get_field('color_palette_settings_accent_color', 'option');
?>

<section class="dream-houses-container">
    <div class="container">
        <div class="dream-houses-container__info-container">
            <?php
                if(!empty($dream_houses_title)):
                    ?>
                        <h1 class="dream-houses-container__main-title"><?php echo $dream_houses_title; ?></h1>
                    <?php
                else:
                    ?>
                        <h1 class="dream-houses-container__main-title">Your title here</h1>
                    <?php
                endif;
            ?>
            <?php
                if(!empty($dream_houses_description)):
                    ?>
                        <p class="dream-houses-container__main-desc"><?php echo $dream_houses_description; ?></p>
                    <?php
                else:
                    ?>
                        <p class="dream-houses-container__main-desc">Your description here</p>
                    <?php
                endif;
            ?>
        </div>
        <div class="dream-houses-container__cards-container">

            <div class="swiper-container featured-services-swiper-container">
                <div class="swiper-wrapper featured-services-swiper-wrapper">
                    <?php
                        if( have_rows('featured_services_repeater', 'option') ):
                            while( have_rows('featured_services_repeater', 'option') ) : the_row();
                                $featured_services_image = get_sub_field('featured_services_repeater_image');
                                $featured_services_description = get_sub_field('featured_services_repeater_description');
                                $featured_services_link = get_sub_field('featured_services_repeater_link');
                                $featured_services_link_target = $featured_services_link['target'] ? $featured_services_link['target'] : '_self';
                                ?>

                                    <div class="swiper-slide featured-services-swiper-slide">
                                        <div class="card__wrap--inner dream-houses-container__card-wrap-inner">
                                            <div class="card">
                                                <img src="<?php echo $featured_services_image['url']; ?>" class="card__image" alt="<?php echo $featured_services_image['alt']; ?>" />
                                                <div class="card__item card__flexible dream-houses-container__flexible">
                                                    <p><?php echo $featured_services_description; ?></p>
                                                </div>
                                                <?php
                                                    if(!empty($featured_services_link)):
                                                        ?>
                                                            <div class="card__footer">
                                                                <a href="<?php echo $featured_services_link['url']; ?>" class="button button__outline button__icon button__outline--right-arrow card__button dream-houses-container__button" target="<?php echo $featured_services_link_target; ?>" style="color: <?php echo $accent_color; ?>;"><?php echo $featured_services_link['title']; ?>
                                                                    <span>
                                                                        <svg class="button__outline--right-arrow button__outline--right-arrow-icon" width="20" height="14" viewBox="0 0 20 14" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M12.29 0.70998C11.9 1.09998 11.9 1.72998 12.29 2.11998L16.17 5.99998H1C0.45 5.99998 0 6.44998 0 6.99998C0 7.54998 0.45 7.99998 1 7.99998H16.18L12.3 11.88C11.91 12.27 11.91 12.9 12.3 13.29C12.69 13.68 13.32 13.68 13.71 13.29L19.3 7.69998C19.69 7.30998 19.69 6.67998 19.3 6.28998L13.7 0.70998C13.32 0.31998 12.68 0.31998 12.29 0.70998Z" />
                                                                        </svg>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        <?php
                                                    endif;
                                                ?>
                                            </div>
                                        </div>
                                    </div>

                                <?php
                            endwhile;
                        endif;
                    ?>
                </div>
                <?php
                    $featured_services_count = count(get_field('featured_services_repeater', 'option'));
                    if($featured_services_count >= 4):
                        ?>
                            <div class="dream-houses-container__navigation-main-wrapper">
                                <div class="dream-houses-container__navigation-container">
                                    <div class="swiper-button-prev featured-services-swiper-button-prev"></div>
                                    <div class="swiper-button-next featured-services-swiper-button-next"></div>
                                </div>
                            </div>
                        <?php
                    else:
                        ?>
                            <div class="dream-houses-container__navigation-main-wrapper hide-on-desktop">
                                <div class="dream-houses-container__navigation-container">
                                    <div class="swiper-button-prev featured-services-swiper-button-prev"></div>
                                    <div class="swiper-button-next featured-services-swiper-button-next"></div>
                                </div>
                            </div>
                        <?php
                    endif;
                ?>
            </div>

        </div>
    </div>
</section>