<?php
    $other_neighborhoods_title = get_field('other_neighborhoods_title');
    $other_neighborhoods_description = get_field('other_neighborhoods_description');
    $other_neighborhoods_link = get_field('other_neighborhoods_link');
    $neighborhoods_column_title = get_field('neighborhoods_column_title');

    // Groups
    $other_neighborhood_group_one = get_field('other_neighborhood_group_one');
    $other_neighborhood_group_two = get_field('other_neighborhood_group_two');
    $other_neighborhood_group_three = get_field('other_neighborhood_group_three');

    $accent_color = get_field('color_palette_settings_accent_color', 'option');

?>

<section class="dream-houses-container other-neighborhoods-container">
    <div class="container">
        <div class="dream-houses-container__info-container  other-neighborhoods-container__info-container bg-enabled our-neighborhoods-container__info-column-reverted">
                <?php
                    if(!empty($other_neighborhoods_title)):
                        ?>
                            <h1 class="dream-houses-container__main-title"><?php echo $other_neighborhoods_title; ?></h1>
                        <?php
                    else:
                        ?>
                            <h1 class="dream-houses-container__main-title">Your title here</h1>
                        <?php
                    endif;
                ?>
                <?php
                    if(!empty($other_neighborhoods_description)):
                        echo $other_neighborhoods_description;
                    else:
                        ?>
                            <p class="dream-houses-container__main-desc">Your description here</p>
                        <?php
                    endif;
                ?>
                <?php
                    if(!empty($other_neighborhoods_link)):
                        $other_neighborhoods_link_target = $other_neighborhoods_link['target'] ? $other_neighborhoods_link['target'] : '_self';
                        ?>
                            <div class="other-neighborhoods-container__button-container">
                                <a href="<?php echo $other_neighborhoods_link['url']; ?>" class="button button__outline button__icon button__outline--right-arrow" target="<?php echo $other_neighborhoods_link_target; ?>" style="color: <?php echo $accent_color; ?>;"><?php echo $other_neighborhoods_link['title']; ?>
                                    <span>
                                        <svg class="button__outline--right-arrow button__outline--right-arrow-icon" width="20" height="14" viewBox="0 0 20 14" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.29 0.70998C11.9 1.09998 11.9 1.72998 12.29 2.11998L16.17 5.99998H1C0.45 5.99998 0 6.44998 0 6.99998C0 7.54998 0.45 7.99998 1 7.99998H16.18L12.3 11.88C11.91 12.27 11.91 12.9 12.3 13.29C12.69 13.68 13.32 13.68 13.71 13.29L19.3 7.69998C19.69 7.30998 19.69 6.67998 19.3 6.28998L13.7 0.70998C13.32 0.31998 12.68 0.31998 12.29 0.70998Z"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        <?php
                    else:
                        ?>                        
                            <div class="other-neighborhoods-container__button-container">
                                <a href="#" class="button button__outline button__icon button__outline--right-arrow" target="_self" style="color: #f44e65;">Link here<span></span></a>
                            </div>
                        <?php
                    endif;
                ?>
        </div>
        <div class="dream-houses-container__cards-container">

            <div class="card__wrap--outer">
                <?php
                    if(!empty($neighborhoods_column_title)):
                        ?>
                            <h1 class="other-neighborhoods-container__other-neigh-title"><?php echo $neighborhoods_column_title; ?></h1>
                        <?php
                    else:
                        ?>
                            <h1 class="other-neighborhoods-container__other-neigh-title">Your title here</h1>
                        <?php
                    endif;
                ?>

                <?php
                    if(!empty($other_neighborhood_group_one)):
                        $other_neighborhood_group_one_image = $other_neighborhood_group_one['other_neighborhood_group_one_image'];
                        $other_neighborhood_group_one_location = $other_neighborhood_group_one['other_neighborhood_group_one_location'];
                        $other_neighborhood_group_one_link = $other_neighborhood_group_one['other_neighborhood_group_one_link'];
                        $other_neighborhood_group_one_link_target = $other_neighborhood_group_one_link['target'] ? $other_neighborhood_group_one_link['target'] : '_self'; 
                        ?>
                            <div class="card__wrap--inner">
                                <div class="card">
                                    <img src="<?php echo !empty($other_neighborhood_group_one_image['url']) ? $other_neighborhood_group_one_image['url'] : get_template_directory_uri() . '/images/default-image.png';  ?>" class="card__image" alt="<?php echo $other_neighborhood_group_one_image['alt']; ?>" />
                                    <?php
                                        if(!empty($other_neighborhood_group_one_location)):
                                            ?>
                                                <div class="card__item card__flexible other-neighborhoods-container__flexible">
                                                    <p><?php echo $other_neighborhood_group_one_location; ?></p>
                                                </div>
                                            <?php
                                        else:
                                            ?>                                                
                                                <div class="card__item card__flexible other-neighborhoods-container__flexible">
                                                    <p>Your location</p>
                                                </div>
                                            <?php
                                        endif;
                                    ?>
                                    <?php
                                        if(!empty($other_neighborhood_group_one_link)):
                                            ?>
                                                <div class="card__footer other-neighborhoods-container__card-footer">
                                                    <a href="<?php echo $other_neighborhood_group_one_link['url']; ?>" class="button button__outline" target="<?php echo $other_neighborhood_group_one_link_target; ?>" style="color: <?php echo $accent_color; ?>;"><?php echo $other_neighborhood_group_one_link['title']; ?></a>
                                                </div>
                                            <?php
                                        else:
                                            ?>                                            
                                                <div class="card__footer other-neighborhoods-container__card-footer">
                                                    <a href="#" class="button button__outline" target="_self" style="color: #F44E65;">Link here</a>
                                                </div>
                                            <?php
                                        endif;
                                    ?>
                                </div>
                            </div>
                        <?php
                    endif;
                ?>

                <?php
                    if(!empty($other_neighborhood_group_two)):
                        $other_neighborhood_group_two_image = $other_neighborhood_group_two['other_neighborhood_group_two_image'];
                        $other_neighborhood_group_two_location = $other_neighborhood_group_two['other_neighborhood_group_two_location'];
                        $other_neighborhood_group_two_link = $other_neighborhood_group_two['other_neighborhood_group_two_link'];
                        $other_neighborhood_group_two_link_target = $other_neighborhood_group_two_link['target'] ? $other_neighborhood_group_two_link['target'] : '_self'; 
                        ?>
                            <div class="card__wrap--inner">
                                <div class="card">
                                    <img src="<?php echo !empty($other_neighborhood_group_two_image['url']) ? $other_neighborhood_group_two_image['url'] : get_template_directory_uri() . '/images/default-image.png';  ?>" class="card__image" alt="<?php echo $other_neighborhood_group_two_image['alt']; ?>" />
                                    <?php
                                        if(!empty($other_neighborhood_group_two_location)):
                                            ?>
                                                <div class="card__item card__flexible other-neighborhoods-container__flexible">
                                                    <p><?php echo $other_neighborhood_group_two_location; ?></p>
                                                </div>
                                            <?php
                                        else:
                                            ?>                                                
                                                <div class="card__item card__flexible other-neighborhoods-container__flexible">
                                                    <p>Your location</p>
                                                </div>
                                            <?php
                                        endif;
                                    ?>
                                    <?php
                                        if(!empty($other_neighborhood_group_two_link)):
                                            ?>
                                                <div class="card__footer other-neighborhoods-container__card-footer">
                                                    <a href="<?php echo $other_neighborhood_group_two_link['url']; ?>" class="button button__outline" target="<?php echo $other_neighborhood_group_two_link_target; ?>" style="color: <?php echo $accent_color; ?>;"><?php echo $other_neighborhood_group_two_link['title']; ?></a>
                                                </div>
                                            <?php
                                        else:
                                            ?>                                            
                                                <div class="card__footer other-neighborhoods-container__card-footer">
                                                    <a href="#" class="button button__outline" target="_self" style="color: #F44E65;">Link here</a>
                                                </div>
                                            <?php
                                        endif;
                                    ?>
                                </div>
                            </div>
                        <?php
                    endif;
                ?>

                <?php
                    if(!empty($other_neighborhood_group_three)):
                        $other_neighborhood_group_three_image = $other_neighborhood_group_three['other_neighborhood_group_three_image'];
                        $other_neighborhood_group_three_location = $other_neighborhood_group_three['other_neighborhood_group_three_location'];
                        $other_neighborhood_group_three_link = $other_neighborhood_group_three['other_neighborhood_group_three_link'];
                        $other_neighborhood_group_three_link_target = $other_neighborhood_group_three_link['target'] ? $other_neighborhood_group_three_link['target'] : '_self'; 
                        ?>
                            <div class="card__wrap--inner">
                                <div class="card">
                                    <img src="<?php echo !empty($other_neighborhood_group_three_image['url']) ? $other_neighborhood_group_three_image['url'] : get_template_directory_uri() . '/images/default-image.png';  ?>" class="card__image" alt="<?php echo $other_neighborhood_group_three_image['alt']; ?>" />
                                    <?php
                                        if(!empty($other_neighborhood_group_three_location)):
                                            ?>
                                                <div class="card__item card__flexible other-neighborhoods-container__flexible">
                                                    <p><?php echo $other_neighborhood_group_three_location; ?></p>
                                                </div>
                                            <?php
                                        else:
                                            ?>                                                
                                                <div class="card__item card__flexible other-neighborhoods-container__flexible">
                                                    <p>Your location</p>
                                                </div>
                                            <?php
                                        endif;
                                    ?>
                                    <?php
                                        if(!empty($other_neighborhood_group_three_link)):
                                            ?>
                                                <div class="card__footer other-neighborhoods-container__card-footer">
                                                    <a href="<?php echo $other_neighborhood_group_three_link['url']; ?>" class="button button__outline" target="<?php echo $other_neighborhood_group_three_link_target; ?>" style="color: <?php echo $accent_color; ?>;"><?php echo $other_neighborhood_group_three_link['title']; ?></a>
                                                </div>
                                            <?php
                                        else:
                                            ?>                                            
                                                <div class="card__footer other-neighborhoods-container__card-footer">
                                                    <a href="#" class="button button__outline" target="_self" style="color: #F44E65;">Link here</a>
                                                </div>
                                            <?php
                                        endif;
                                    ?>
                                </div>
                            </div>
                        <?php
                    endif;
                ?>

            </div>
        </div>
    </div>
</section>