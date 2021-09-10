<?php
    $title_description_cta_title = get_field('title_description_cta_title');
    $title_description_cta_title_type = get_field('title_description_cta_title_type');
    $title_description_cta_title_alignment = get_field('title_description_cta_title_alignment');
    $title_description_cta_title_size = get_field('title_description_cta_title_size');
    $title_description_cta_is_description_available = get_field('title_description_cta_is_description_available');
    $title_description_cta_description = get_field('title_description_cta_description');
    $title_description_cta_is_link_available = get_field('title_description_cta_is_link_available');
    $title_description_cta_link = get_field('title_description_cta_link');
    $title_description_cta_link_target = $title_description_cta_link['target'] ? $title_description_cta_link['target'] : '_self';

    $accent_color = get_field('color_palette_settings_accent_color', 'option');

?>

<section class="title-description-cta-container">
    <div class="container">
        <?php
            if ((!empty($title_description_cta_title) && !empty($title_description_cta_title_type)) &&  $title_description_cta_title_type == 'h1'):
                ?>
                    <h1 class="title-description-cta-container__title <?php echo  $title_description_cta_title_alignment == 'left' ? 'left' : 'center'; ?>" style="font-size: <?php echo $title_description_cta_title_size; ?>px;"><?php echo $title_description_cta_title; ?></h1>
                <?php
            elseif ((!empty($title_description_cta_title) && !empty($title_description_cta_title_type)) &&  $title_description_cta_title_type == 'h2'):
                ?>
                    <h2 class="title-description-cta-container__title <?php echo  $title_description_cta_title_alignment == 'left' ? 'left' : 'center'; ?>" style="font-size: <?php echo $title_description_cta_title_size; ?>px;"><?php echo $title_description_cta_title; ?></h2>
                <?php
            elseif ((!empty($title_description_cta_title) && !empty($title_description_cta_title_type)) &&  $title_description_cta_title_type == 'h3'):
                ?>
                    <h3 class="title-description-cta-container__title <?php echo  $title_description_cta_title_alignment == 'left' ? 'left' : 'center'; ?>" style="font-size: <?php echo $title_description_cta_title_size; ?>px;"><?php echo $title_description_cta_title; ?></h3>
                <?php
            else:
                ?>
                    <h1 class="title-description-cta-container__title <?php echo  $title_description_cta_title_alignment == 'left' ? 'left' : 'center'; ?>">Your title here</h1>
                <?php
            endif;
        ?>
        <?php
            if(!empty($title_description_cta_is_description_available) && $title_description_cta_is_description_available == 'yes'):
                ?>
                    <div class="title-description-cta-container__desc-container">
                        <?php echo $title_description_cta_description; ?>
                    </div>
                <?php
            endif;
        ?>
        <?php
            if(!empty($title_description_cta_is_link_available) && $title_description_cta_is_link_available == 'yes'):
                ?>
                    <div class="title-description-cta-container__button-container">
                        <a href="<?php echo $title_description_cta_link['url']; ?>" class="button button__outline button__icon button__outline--right-arrow" target="<?php echo $title_description_cta_link_target; ?>" style="color: <?php echo $accent_color; ?>;"><?php echo $title_description_cta_link['title']; ?>
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