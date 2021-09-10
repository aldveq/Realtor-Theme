<?php

    // Neighborhood Settings
    $neighborhoods_settings_title = get_field('neighborhoods_settings_title', 'option');
    $neighborhoods_settings_revert_first_column = get_field('neighborhoods_settings_revert_first_column');
    $neighborhoods_settings_add_title_to_the_neigborhood_column = get_field('neighborhoods_settings_add_title_to_the_neigborhood_column');

    // Neighborhood One
    $neighborhoods_settings_one_image = get_field('neighborhoods_settings_one_image', 'option');
    $neighborhoods_settings_one_location = get_field('neighborhoods_settings_one_location', 'option');
    $neighborhoods_settings_one_link = get_field('neighborhoods_settings_one_link', 'option');
    $neighborhoods_settings_one_link_target = $neighborhoods_settings_one_link['target'] ? $neighborhoods_settings_one_link['target'] : '_self';

    // Neighborhood Two
    $neighborhoods_settings_two_image = get_field('neighborhoods_settings_two_image', 'option');
    $neighborhoods_settings_two_location = get_field('neighborhoods_settings_two_location', 'option');
    $neighborhoods_settings_two_link = get_field('neighborhoods_settings_two_link', 'option');
    $neighborhoods_settings_two_link_target = $neighborhoods_settings_two_link['target'] ? $neighborhoods_settings_two_link['target'] : '_self';

    // Neighborhood Three
    $neighborhoods_settings_three_image = get_field('neighborhoods_settings_three_image', 'option');
    $neighborhoods_settings_three_location = get_field('neighborhoods_settings_three_location', 'option');
    $neighborhoods_settings_three_link = get_field('neighborhoods_settings_three_link', 'option');
    $neighborhoods_settings_three_link_target = $neighborhoods_settings_three_link['target'] ? $neighborhoods_settings_three_link['target'] : '_self';

    // Neighborhood Four
    $neighborhoods_settings_four_image = get_field('neighborhoods_settings_four_image', 'option');
    $neighborhoods_settings_four_location = get_field('neighborhoods_settings_four_location', 'option');
    $neighborhoods_settings_four_link = get_field('neighborhoods_settings_four_link', 'option');
    $neighborhoods_settings_four_link_target = $neighborhoods_settings_four_link['target'] ? $neighborhoods_settings_four_link['target'] : '_self';

    // Row Content One
    $neighborhood_row_one_title = get_field('neighborhood_row_one_title');
    $neighborhood_row_one_content = get_field('neighborhood_row_one_content');
    $neighborhood_row_one_add_background_color = get_field('neighborhood_row_one_add_background_color');
    $neighborhood_row_one_content_is_link_enabled = get_field('neighborhood_row_one_content_is_link_enabled');
    $neighborhood_row_one_link = get_field('neighborhood_row_one_link');

    // Row Content Two
    $neighborhood_row_two_is_second_row_available = get_field('neighborhood_row_two_is_second_row_available');
    $neighborhood_row_two_is_contact_info_available = get_field('neighborhood_row_two_is_contact_info_available');
    $neighborhood_row_two_title = get_field('neighborhood_row_two_title');
    $neighborhood_row_two_content = get_field('neighborhood_row_two_content');

    // Row Content Two - Contact Info
    $neighborhood_row_two_contact_info_title = get_field('neighborhood_row_two_contact_info_title');
    $neighborhood_row_two_contact_info_content = get_field('neighborhood_row_two_contact_info_content');
    $neighborhood_row_two_contact_info_contact_title = get_field('neighborhood_row_two_contact_info_contact_title');
    $neighborhood_row_two_contact_info_contact_contact_phone_number = get_field('neighborhood_row_two_contact_info_contact_contact_phone_number');
    $neighborhood_row_two_contact_info_contact_title_of_the_links = get_field('neighborhood_row_two_contact_info_contact_title_of_the_links');
    $neighborhood_row_two_contact_info_contact_link_one = get_field('neighborhood_row_two_contact_info_contact_link_one');
    $neighborhood_row_two_contact_info_contact_link_one_target = $neighborhood_row_two_contact_info_contact_link_one['target'] ? $neighborhood_row_two_contact_info_contact_link_one['target'] : '_self';
    $neighborhood_row_two_contact_info_contact_link_two = get_field('neighborhood_row_two_contact_info_contact_link_two');
    $neighborhood_row_two_contact_info_contact_link_two_target = $neighborhood_row_two_contact_info_contact_link_two['target'] ? $neighborhood_row_two_contact_info_contact_link_two['target'] : '_self';
    $neighborhood_row_two_contact_info_contact_link_three = get_field('neighborhood_row_two_contact_info_contact_link_three');
    $neighborhood_row_two_contact_info_contact_link_three_target = $neighborhood_row_two_contact_info_contact_link_three['target'] ? $neighborhood_row_two_contact_info_contact_link_three['target'] : '_self';

    $accent_color = get_field('color_palette_settings_accent_color', 'option');

?>

<section class="our-neighborhoods-container <?php echo $neighborhoods_settings_add_title_to_the_neigborhood_column == 'yes' ? 'extra-pad' : ''; ?>">
    <div class="container">
        <?php 
            if(!empty($neighborhoods_settings_title)):
                ?>
                    <h2 class="our-neighborhoods-container__title <?php echo $neighborhoods_settings_add_title_to_the_neigborhood_column == 'yes' ? 'hidden' : ''; ?>"><?php echo $neighborhoods_settings_title; ?></h2>
                <?php
            else:
                ?>
                    <h2 class="our-neighborhoods-container__title <?php echo $neighborhoods_settings_add_title_to_the_neigborhood_column == 'yes' ? 'hidden' : ''; ?>">You title here</h2>
                <?php
            endif;
        ?>
        <div class="our-neighborhoods-container__neighborhoods-column <?php echo $neighborhoods_settings_revert_first_column == 'yes' ? 'our-neighborhoods-container__neighborhoods-column-revert' : ''; ?>">

            <h2 class="our-neighborhoods-container__title our-neighborhoods-container__neighborhoods-column-title <?php echo $neighborhoods_settings_revert_first_column == 'no' ? 'no-pad-left' : ''; ?> <?php echo $neighborhoods_settings_add_title_to_the_neigborhood_column == 'yes' ? 'show' : ''; ?>"><?php echo $neighborhoods_settings_title; ?></h2>

            <div class="card__wrap--outer our-neighborhoods-container__wrap-outer">

                <?php
                    if(!empty($neighborhoods_settings_one_image) && !empty($neighborhoods_settings_one_location) && !empty($neighborhoods_settings_one_link)):
                        ?>
                            <div class="card__wrap--inner our-neighborhoods-container__wrap--inner">
                                <div class="card">
                                    <img src="<?php echo $neighborhoods_settings_one_image['url']; ?>" class="card__image our-neighborhoods-container__card-image" alt="<?php echo $neighborhoods_settings_one_image['alt']; ?>">
                                    <div class="card__item card__flexible our-neighborhoods-container__flexible">
                                        <p><?php echo $neighborhoods_settings_one_location; ?></p>
                                    </div>
                                    <div class="card__footer our-neighborhoods-container__footer">
                                        <a href="<?php echo $neighborhoods_settings_one_link['url']; ?>" class="button button__outline button__outline--small" target="<?php echo $neighborhoods_settings_one_link_target; ?>" style="color: <?php echo $accent_color; ?>;"><?php echo $neighborhoods_settings_one_link['title']; ?></a>
                                    </div>
                                </div>
                            </div>
                        <?php
                    else:
                        ?>
                            <div class="card__wrap--inner our-neighborhoods-container__wrap--inner">
                                <div class="card">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/default-image.png" class="card__image our-neighborhoods-container__card-image" alt="Default image">
                                    <div class="card__item card__flexible our-neighborhoods-container__flexible">
                                        <p>Your location</p>
                                    </div>
                                    <div class="card__footer our-neighborhoods-container__footer">
                                        <a href="" class="button button__outline button__outline--small" target="_self" style="color: #F44E65;">Your link</a>
                                    </div>
                                </div>
                            </div>
                        <?php
                    endif;
                ?>

                <?php
                    if(!empty($neighborhoods_settings_two_image) && !empty($neighborhoods_settings_two_location) && !empty($neighborhoods_settings_two_link)):
                        ?>
                            <div class="card__wrap--inner our-neighborhoods-container__wrap--inner">
                                <div class="card">
                                    <img src="<?php echo $neighborhoods_settings_two_image['url']; ?>" class="card__image our-neighborhoods-container__card-image" alt="<?php echo $neighborhoods_settings_two_image['alt']; ?>">
                                    <div class="card__item card__flexible our-neighborhoods-container__flexible">
                                        <p><?php echo $neighborhoods_settings_two_location; ?></p>
                                    </div>
                                    <div class="card__footer our-neighborhoods-container__footer">
                                        <a href="<?php echo $neighborhoods_settings_two_link['url']; ?>" class="button button__outline button__outline--small" target="<?php echo $neighborhoods_settings_two_link_target; ?>" style="color: <?php echo $accent_color; ?>;"><?php echo $neighborhoods_settings_two_link['title']; ?></a>
                                    </div>
                                </div>
                            </div>
                        <?php
                    else:
                        ?>
                            <div class="card__wrap--inner our-neighborhoods-container__wrap--inner">
                                <div class="card">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/default-image.png" class="card__image our-neighborhoods-container__card-image" alt="Default image">
                                    <div class="card__item card__flexible our-neighborhoods-container__flexible">
                                        <p>Your location</p>
                                    </div>
                                    <div class="card__footer our-neighborhoods-container__footer">
                                        <a href="" class="button button__outline button__outline--small" target="_self" style="color: #F44E65;">Your link</a>
                                    </div>
                                </div>
                            </div>
                        <?php
                    endif;
                ?>

            </div>

            <div class="card__wrap--outer our-neighborhoods-container__wrap-outer">

                <?php
                    if(!empty($neighborhoods_settings_three_image) && !empty($neighborhoods_settings_three_location) && !empty($neighborhoods_settings_three_link)):
                        ?>
                            <div class="card__wrap--inner our-neighborhoods-container__wrap--inner">
                                <div class="card">
                                    <img src="<?php echo $neighborhoods_settings_three_image['url']; ?>" class="card__image our-neighborhoods-container__card-image" alt="<?php echo $neighborhoods_settingsthreee_image['alt']; ?>">
                                    <div class="card__item card__flexible our-neighborhoods-container__flexible">
                                        <p><?php echo $neighborhoods_settings_three_location; ?></p>
                                    </div>
                                    <div class="card__footer our-neighborhoods-container__footer">
                                        <a href="<?php echo $neighborhoods_settings_three_link['url']; ?>" class="button button__outline button__outline--small" target="<?php echo $neighborhoods_settings_three_link_target; ?>" style="color: <?php echo $accent_color; ?>;"><?php echo $neighborhoods_settings_three_link['title']; ?></a>
                                    </div>
                                </div>
                            </div>
                        <?php
                    else:
                        ?>
                            <div class="card__wrap--inner our-neighborhoods-container__wrap--inner">
                                <div class="card">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/default-image.png" class="card__image our-neighborhoods-container__card-image" alt="Default image">
                                    <div class="card__item card__flexible our-neighborhoods-container__flexible">
                                        <p>Your location</p>
                                    </div>
                                    <div class="card__footer our-neighborhoods-container__footer">
                                        <a href="" class="button button__outline button__outline--small" target="_self" style="color: #F44E65;">Your link</a>
                                    </div>
                                </div>
                            </div>
                        <?php
                    endif;
                ?>

                <?php
                    if(!empty($neighborhoods_settings_four_image) && !empty($neighborhoods_settings_four_location) && !empty($neighborhoods_settings_four_link)):
                        ?>
                            <div class="card__wrap--inner our-neighborhoods-container__wrap--inner">
                                <div class="card">
                                    <img src="<?php echo $neighborhoods_settings_four_image['url']; ?>" class="card__image our-neighborhoods-container__card-image" alt="<?php echo $neighborhoods_settingsfoure_image['alt']; ?>">
                                    <div class="card__item card__flexible our-neighborhoods-container__flexible">
                                        <p><?php echo $neighborhoods_settings_four_location; ?></p>
                                    </div>
                                    <div class="card__footer our-neighborhoods-container__footer">
                                        <a href="<?php echo $neighborhoods_settings_four_link['url']; ?>" class="button button__outline button__outline--small" target="<?php echo $neighborhoods_settings_four_link_target; ?>" style="color: <?php echo $accent_color; ?>;"><?php echo $neighborhoods_settings_four_link['title']; ?></a>
                                    </div>
                                </div>
                            </div>
                        <?php
                    else:
                        ?>
                            <div class="card__wrap--inner our-neighborhoods-container__wrap--inner">
                                <div class="card">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/default-image.png" class="card__image our-neighborhoods-container__card-image" alt="Default image">
                                    <div class="card__item card__flexible our-neighborhoods-container__flexible">
                                        <p>Your location</p>
                                    </div>
                                    <div class="card__footer our-neighborhoods-container__footer">
                                        <a href="" class="button button__outline button__outline--small" target="_self" style="color: #F44E65;">Your link</a>
                                    </div>
                                </div>
                            </div>
                        <?php
                    endif;
                ?>

            </div>
            
        </div>
        <div class="our-neighborhoods-container__info-column <?php echo get_background_color_for_first_content($neighborhood_row_one_add_background_color, $neighborhoods_settings_revert_first_column); ?> <?php echo $neighborhoods_settings_revert_first_column == 'yes' ? 'our-neighborhoods-container__info-column-reverted' : ''; ?>">
            <div class="our-neighborhoods-container__info-column-one">
                <?php
                    if(!empty($neighborhood_row_one_title)):
                        ?>
                            <h3 class="our-neighborhoods-container__info-column-title"><?php echo $neighborhood_row_one_title; ?></h3>
                        <?php
                    else: 
                        ?>
                            <h3 class="our-neighborhoods-container__info-column-title">You title here</h3>
                        <?php
                    endif;
                ?>
                <?php
                    if(!empty($neighborhood_row_one_content)):
                        echo $neighborhood_row_one_content;
                    else: 
                        ?>
                            <p class="our-neighborhoods-container__info-column-desc">Your content here</p>
                        <?php
                    endif;
                ?>
                <?php
                    if(!empty($neighborhood_row_one_content_is_link_enabled) && $neighborhood_row_one_content_is_link_enabled == 'yes'):
                        $neighborhood_row_one_link_target = $neighborhood_row_one_link['target'] ? $neighborhood_row_one_link['target'] : '_self';
                        ?>
                            <div class="our-neighborhoods-container__info-column-button-container">
                                <a href="<?php echo $neighborhood_row_one_link['url']; ?>" class="button button__outline button__icon button__outline--right-arrow card__button" target="<?php echo $neighborhood_row_one_link_target; ?>" style="color: <?php echo $accent_color; ?>;"><?php echo $neighborhood_row_one_link['title']; ?>
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
            <?php
                if((!empty($neighborhood_row_two_is_second_row_available) && $neighborhood_row_two_is_second_row_available == 'yes') && (!empty($neighborhood_row_two_is_contact_info_available) && $neighborhood_row_two_is_contact_info_available == "no")):
                    ?>
                        <div class="our-neighborhoods-container__info-column-two">
                            <?php
                                if(!empty($neighborhood_row_two_title)):
                                    ?>
                                        <h3 class="our-neighborhoods-container__info-column-title"><?php echo $neighborhood_row_two_title; ?></h3>
                                    <?php
                                else:
                                    ?>
                                        <h3 class="our-neighborhoods-container__info-column-title">Your title here</h3>
                                    <?php
                                endif;
                            ?>
                            <?php
                                if(!empty($neighborhood_row_two_content)):
                                    echo $neighborhood_row_two_content;
                                else:
                                    ?>                                    
                                        <p class="our-neighborhoods-container__info-column-desc">Your content here</p>
                                    <?php
                                endif;
                            ?>
                        </div>
                    <?php
                endif;
            ?>
            <?php
                if((!empty($neighborhood_row_two_is_second_row_available) && $neighborhood_row_two_is_second_row_available == 'yes') && (!empty($neighborhood_row_two_is_contact_info_available) && $neighborhood_row_two_is_contact_info_available == "yes")):
                    ?>
                        <div class="our-neighborhoods-container__info-column-two our-neighborhoods-container__contact-info-column">
                            <?php
                                if(!empty($neighborhood_row_two_contact_info_title)):
                                    ?>
                                        <h3 class="our-neighborhoods-container__info-column-title"><?php echo $neighborhood_row_two_contact_info_title; ?></h3>
                                    <?php
                                else:
                                    ?>
                                        <h3 class="our-neighborhoods-container__info-column-title">Your title here</h3>
                                    <?php                                
                                endif;
                            ?>
                            <div class="our-neighborhoods-container__contact-info-container">
                                <?php
                                    if(!empty($neighborhood_row_two_contact_info_content)):
                                        ?>
                                            <p class="our-neighborhoods-container__info-column-desc"><?php echo $neighborhood_row_two_contact_info_content; ?></p>
                                        <?php
                                    else:
                                        ?>
                                            <p class="our-neighborhoods-container__info-column-desc">Your content here</p>
                                        <?php
                                    endif;
                                ?>
                                <?php
                                    if(!empty($neighborhood_row_two_contact_info_contact_title) && !empty($neighborhood_row_two_contact_info_contact_contact_phone_number)):
                                        ?>
                                            <a href="<?php echo $neighborhood_row_two_contact_info_contact_contact_phone_number; ?>" class="olly-olly-realtor-theme-header__cta-link olly-olly-realtor-theme-header__cta-link--desktop"><h6><?php echo $neighborhood_row_two_contact_info_contact_title; ?><span class="olly-olly-realtor-theme-header__cta-number"><?php echo $neighborhood_row_two_contact_info_contact_contact_phone_number; ?></span></h6></a>
                                        <?php
                                    else:
                                        ?>
                                            <a href="tel:(000) 000-0000" class="olly-olly-realtor-theme-header__cta-link olly-olly-realtor-theme-header__cta-link--desktop"><h6>Title!<span class="olly-olly-realtor-theme-header__cta-number">(000) 000-0000</span></h6></a>
                                        <?php
                                    endif;
                                ?>
                            </div>
                            <div class="our-neighborhoods-container__contact-info-button-wrapper">
                                <?php
                                    if(!empty($neighborhood_row_two_contact_info_contact_title_of_the_links)):
                                        ?>
                                            <h6><?php echo $neighborhood_row_two_contact_info_contact_title_of_the_links; ?></h6>
                                        <?php
                                    else: 
                                        ?>
                                            <h6>Title of the buttons container</h6>
                                        <?php
                                    endif;
                                ?>
                                <div class="our-neighborhoods-container__contact-info-button-container">
                                    <?php
                                        if(!empty($neighborhood_row_two_contact_info_contact_link_one)):
                                            ?>
                                                <a href="<?php echo $neighborhood_row_two_contact_info_contact_link_one['url']; ?>" class="button button__outline button__icon button__outline--right-arrow card__button" target="<?php echo $neighborhood_row_two_contact_info_contact_link_one_target; ?>" style="color: <?php echo $accent_color; ?>;"><?php echo $neighborhood_row_two_contact_info_contact_link_one['title']; ?>
                                                    <span>
                                                        <svg class="button__outline--right-arrow button__outline--right-arrow-icon" width="20" height="14" viewBox="0 0 20 14" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M12.29 0.70998C11.9 1.09998 11.9 1.72998 12.29 2.11998L16.17 5.99998H1C0.45 5.99998 0 6.44998 0 6.99998C0 7.54998 0.45 7.99998 1 7.99998H16.18L12.3 11.88C11.91 12.27 11.91 12.9 12.3 13.29C12.69 13.68 13.32 13.68 13.71 13.29L19.3 7.69998C19.69 7.30998 19.69 6.67998 19.3 6.28998L13.7 0.70998C13.32 0.31998 12.68 0.31998 12.29 0.70998Z"></path>
                                                        </svg>
                                                    </span>
                                                </a>
                                            <?php
                                        else: 
                                            ?>
                                                <a href="#" class="button button__outline button__icon button__outline--right-arrow card__button" target="_blank" style="color: #f44e65;">Link one<span></span></a>
                                            <?php
                                        endif;
                                    ?>
                                </div>
                                <div class="our-neighborhoods-container__contact-info-button-container">
                                    <?php
                                        if(!empty($neighborhood_row_two_contact_info_contact_link_two)):
                                            ?>
                                                <a href="<?php echo $neighborhood_row_two_contact_info_contact_link_two['url']; ?>" class="button button__outline button__icon button__outline--right-arrow card__button" target="<?php echo $neighborhood_row_two_contact_info_contact_link_two_target; ?>" style="color: <?php echo $accent_color; ?>;"><?php echo $neighborhood_row_two_contact_info_contact_link_two['title']; ?>
                                                    <span>
                                                        <svg class="button__outline--right-arrow button__outline--right-arrow-icon" width="20" height="14" viewBox="0 0 20 14" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M12.29 0.70998C11.9 1.09998 11.9 1.72998 12.29 2.11998L16.17 5.99998H1C0.45 5.99998 0 6.44998 0 6.99998C0 7.54998 0.45 7.99998 1 7.99998H16.18L12.3 11.88C11.91 12.27 11.91 12.9 12.3 13.29C12.69 13.68 13.32 13.68 13.71 13.29L19.3 7.69998C19.69 7.30998 19.69 6.67998 19.3 6.28998L13.7 0.70998C13.32 0.31998 12.68 0.31998 12.29 0.70998Z"></path>
                                                        </svg>
                                                    </span>
                                                </a>
                                            <?php
                                        else: 
                                            ?>
                                                <a href="#" class="button button__outline button__icon button__outline--right-arrow card__button" target="_blank" style="color: #f44e65;">Link one<span></span></a>
                                            <?php
                                        endif;
                                    ?>
                                </div>
                                <div class="our-neighborhoods-container__contact-info-button-container">
                                    <?php
                                        if(!empty($neighborhood_row_two_contact_info_contact_link_three)):
                                            ?>
                                                <a href="<?php echo $neighborhood_row_three_contact_info_contact_link_three['url']; ?>" class="button button__outline button__icon button__outline--right-arrow card__button" target="<?php echo $neighborhood_row_three_contact_info_contact_link_three_target; ?>" style="color: <?php echo $accent_color; ?>;"><?php echo $neighborhood_row_three_contact_info_contact_link_three['title']; ?>
                                                    <span>
                                                        <svg class="button__outline--right-arrow button__outline--right-arrow-icon" width="20" height="14" viewBox="0 0 20 14" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M12.29 0.70998C11.9 1.09998 11.9 1.72998 12.29 2.11998L16.17 5.99998H1C0.45 5.99998 0 6.44998 0 6.99998C0 7.54998 0.45 7.99998 1 7.99998H16.18L12.3 11.88C11.91 12.27 11.91 12.9 12.3 13.29C12.69 13.68 13.32 13.68 13.71 13.29L19.3 7.69998C19.69 7.30998 19.69 6.67998 19.3 6.28998L13.7 0.70998C13.32 0.31998 12.68 0.31998 12.29 0.70998Z"></path>
                                                        </svg>
                                                    </span>
                                                </a>
                                            <?php
                                        else: 
                                            ?>
                                                <a href="#" class="button button__outline button__icon button__outline--right-arrow card__button" target="_blank" style="color: #f44e65;">Link one<span></span></a>
                                            <?php
                                        endif;
                                    ?>
                                </div>
                            </div>
                        </div>
                    <?php
                endif;
            ?>
        </div>
    </div>
</section>