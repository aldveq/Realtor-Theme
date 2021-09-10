<?php
    $badges_settings_title = get_field('badges_settings_title', 'option');
?>

<section class="badges-container">
    <div class="container">
        <?php
            if(!empty($badges_settings_title)):
                ?>
                    <h1 class="badges-container__title"><?php echo $badges_settings_title; ?></h1>
                <?php
            else:
                ?>
                    <h1 class="badges-container__title">Your title here</h1>
                <?php
            endif;
            $badges_center_class = (count(get_field('badges_settings_badges_repeater', 'option')) < 6) ? 'badges-center-items' : '';
            $badges_pagination_desktop_avaibility = (count(get_field('badges_settings_badges_repeater', 'option')) <= 6) ? 'badges-pagination-desktop-render' : '';
        ?>
        <div class="swiper-container badges-container__swiper-container">
            <div class="swiper-wrapper <?php echo $badges_center_class ?>">

                <?php
                    if( have_rows('badges_settings_badges_repeater', 'option') ):
                        while( have_rows('badges_settings_badges_repeater', 'option') ) : the_row();
                            $badges_settings_badges_repeater_image = get_sub_field('badges_settings_badges_repeater_image');
                            $badges_settings_badges_repeater_is_link_available = get_sub_field('badges_settings_badges_repeater_is_link_available');

                            if($badges_settings_badges_repeater_is_link_available == 'yes'):
                                $badges_settings_badges_repeater_link = get_sub_field('badges_settings_badges_repeater_link');
                                $badges_settings_badges_repeater_link_target = $badges_settings_badges_repeater_link['target'] ? $badges_settings_badges_repeater_link['target'] : '_self';
                                ?>
                                    <div class="swiper-slide badges-container__swiper-slide">
                                        <a href="<?php echo $badges_settings_badges_repeater_link['url']; ?>" target="<?php echo $badges_settings_badges_repeater_link_target; ?>"><img src="<?php echo $badges_settings_badges_repeater_image['url']; ?>" class="badges-container__img" alt="<?php echo $badges_settings_badges_repeater_image['alt']; ?>"></a>
                                    </div>
                                <?php
                            else:
                                ?>
                                    <div class="swiper-slide badges-container__swiper-slide">
                                        <img src="<?php echo $badges_settings_badges_repeater_image['url']; ?>" class="badges-container__img" alt="<?php echo $badges_settings_badges_repeater_image['alt']; ?>">
                                    </div>
                                <?php
                            endif;

                        endwhile;
                    else:
                        ?>
                            <h1>No badges available</h1>
                        <?php
                    endif;
                ?>
            </div>
            <div class="swiper-pagination badges-container__swiper-pagination <?php echo $badges_pagination_desktop_avaibility; ?>"></div>
        </div>
    </div>
</section>