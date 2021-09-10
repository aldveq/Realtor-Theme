<?php
    $accordion_items_title = get_field('accordion_items_title');
    $accordion_item_counter = 0;

    $accent_color = get_field('color_palette_settings_accent_color', 'option');

?>

<section class="accordion-container">
    <div class="container">
        <?php
            if(!empty($accordion_items_title)):
                ?>
                    <h2 class="accordion-container__main-title"><?php echo $accordion_items_title; ?></h2>
                <?php
            else:
                ?>
                    <h2 class="accordion-container__main-title">Your title here</h2>
                <?php
            endif;
        ?>
        <div class="accordion">

            <?php
                if( have_rows('accordion_items_repeater') ):
                    while( have_rows('accordion_items_repeater') ) : the_row();
                        $accordion_items_repeater_title = get_sub_field('accordion_items_repeater_title');
                        $accordion_items_content_or_links = get_sub_field('accordion_items_content_or_links');
                        $accordion_items_repeater_content = get_sub_field('accordion_items_repeater_content');

                        if ($accordion_item_counter == 0) {
                            ?>
                                <input type="radio" name="accordion" id="<?php echo $accordion_items_repeater_title; ?>" checked="">
                                <label for="<?php echo $accordion_items_repeater_title; ?>"><?php echo $accordion_items_repeater_title; ?>
                                    <span class="accordion__svg-container">
                                        <svg width="12" height="8" viewBox="0 0 12 8" xmlns="http://www.w3.org/2000/svg" class="accordion__svg">
                                            <path d="M9.87998 1.29006L5.99998 5.17006L2.11998 1.29006C1.72998 0.900059 1.09998 0.900059 0.70998 1.29006C0.31998 1.68006 0.31998 2.31006 0.70998 2.70006L5.29998 7.29006C5.68998 7.68006 6.31998 7.68006 6.70998 7.29006L11.3 2.70006C11.69 2.31006 11.69 1.68006 11.3 1.29006C10.91 0.910059 10.27 0.900059 9.87998 1.29006Z"/>
                                        </svg>
                                    </span>
                                </label>
                                <div class="accordion-content">
                                    <?php
                                        if($accordion_items_content_or_links == 'links'):
                                            ?>
                                                <ul class="free-consultation-form__area-list accordion-container__area-list">
                                                    <?php
                                                        if( have_rows('accordion_items_repeater_links_group_links_column_one') ):
                                                            while( have_rows('accordion_items_repeater_links_group_links_column_one') ) : the_row();
                                                                $accordion_items_repeater_links_group_links_column_one_link = get_sub_field('accordion_items_repeater_links_group_links_column_one_link');
                                                                $accordion_items_repeater_links_group_links_column_one_link_target = $accordion_items_repeater_links_group_links_column_one_link['target'] ? $accordion_items_repeater_links_group_links_column_one_link['target'] : '_self';
                                                                ?>
                                                                    <li class="free-consultation-form__area-item"><a href="<?php echo $accordion_items_repeater_links_group_links_column_one_link['url']; ?>" class="button button__text" target="<?php echo $accordion_items_repeater_links_group_links_column_one_link_target; ?>" style="color: <?php echo $accent_color; ?>;"><?php echo $accordion_items_repeater_links_group_links_column_one_link['title']; ?></a></li>
                                                                <?php
                                                            endwhile;
                                                        endif;
                                                    ?>
                                                </ul>
                                                <ul class="free-consultation-form__area-list accordion-container__area-list">
                                                    <?php
                                                        if( have_rows('accordion_items_repeater_links_group_links_column_two') ):
                                                            while( have_rows('accordion_items_repeater_links_group_links_column_two') ) : the_row();
                                                                $accordion_items_repeater_links_group_links_column_two_link = get_sub_field('accordion_items_repeater_links_group_links_column_two_link');
                                                                $accordion_items_repeater_links_group_links_column_two_link_target = $accordion_items_repeater_links_group_links_column_two_link['target'] ? $accordion_items_repeater_links_group_links_column_two_link['target'] : '_self';
                                                                ?>
                                                                    <li class="free-consultation-form__area-item"><a href="<?php echo $accordion_items_repeater_links_group_links_column_two_link['url']; ?>" class="button button__text" target="<?php echo $accordion_items_repeater_links_group_links_column_two_link_target; ?>" style="color: <?php echo $accent_color; ?>;"><?php echo $accordion_items_repeater_links_group_links_column_two_link['title']; ?></a></li>
                                                                <?php
                                                            endwhile;
                                                        endif;
                                                    ?>
                                                </ul>
                                            <?php
                                        else:
                                            echo $accordion_items_repeater_content;
                                        endif;
                                    ?>
                                </div>
                            <?php
                        } else {
                            ?>
                                <input type="radio" name="accordion" id="<?php echo $accordion_items_repeater_title; ?>">
                                <label for="<?php echo $accordion_items_repeater_title; ?>"><?php echo $accordion_items_repeater_title; ?>
                                    <span class="accordion__svg-container">
                                        <svg width="12" height="8" viewBox="0 0 12 8" xmlns="http://www.w3.org/2000/svg" class="accordion__svg">
                                            <path d="M9.87998 1.29006L5.99998 5.17006L2.11998 1.29006C1.72998 0.900059 1.09998 0.900059 0.70998 1.29006C0.31998 1.68006 0.31998 2.31006 0.70998 2.70006L5.29998 7.29006C5.68998 7.68006 6.31998 7.68006 6.70998 7.29006L11.3 2.70006C11.69 2.31006 11.69 1.68006 11.3 1.29006C10.91 0.910059 10.27 0.900059 9.87998 1.29006Z"/>
                                        </svg>
                                    </span>
                                </label>
                                <div class="accordion-content">
                                    <?php
                                        if($accordion_items_content_or_links == 'links'):
                                            ?>
                                                <ul class="free-consultation-form__area-list accordion-container__area-list">
                                                    <?php
                                                        if( have_rows('accordion_items_repeater_links_group_links_column_one') ):
                                                            while( have_rows('accordion_items_repeater_links_group_links_column_one') ) : the_row();
                                                                $accordion_items_repeater_links_group_links_column_one_link = get_sub_field('accordion_items_repeater_links_group_links_column_one_link');
                                                                $accordion_items_repeater_links_group_links_column_one_link_target = $accordion_items_repeater_links_group_links_column_one_link['target'] ? $accordion_items_repeater_links_group_links_column_one_link['target'] : '_self';
                                                                ?>
                                                                    <li class="free-consultation-form__area-item"><a href="<?php echo $accordion_items_repeater_links_group_links_column_one_link['url']; ?>" class="button button__text" target="<?php echo $accordion_items_repeater_links_group_links_column_one_link_target; ?>" style="color: <?php echo $accent_color; ?>;"><?php echo $accordion_items_repeater_links_group_links_column_one_link['title']; ?></a></li>
                                                                <?php
                                                            endwhile;
                                                        endif;
                                                    ?>
                                                </ul>
                                                <ul class="free-consultation-form__area-list accordion-container__area-list">
                                                    <?php
                                                        if( have_rows('accordion_items_repeater_links_group_links_column_two') ):
                                                            while( have_rows('accordion_items_repeater_links_group_links_column_two') ) : the_row();
                                                                $accordion_items_repeater_links_group_links_column_two_link = get_sub_field('accordion_items_repeater_links_group_links_column_two_link');
                                                                $accordion_items_repeater_links_group_links_column_two_link_target = $accordion_items_repeater_links_group_links_column_two_link['target'] ? $accordion_items_repeater_links_group_links_column_two_link['target'] : '_self';
                                                                ?>
                                                                    <li class="free-consultation-form__area-item"><a href="<?php echo $accordion_items_repeater_links_group_links_column_two_link['url']; ?>" class="button button__text" target="<?php echo $accordion_items_repeater_links_group_links_column_two_link_target; ?>" style="color: <?php echo $accent_color; ?>;"><?php echo $accordion_items_repeater_links_group_links_column_two_link['title']; ?></a></li>
                                                                <?php
                                                            endwhile;
                                                        endif;
                                                    ?>
                                                </ul>
                                            <?php
                                        else:
                                            echo $accordion_items_repeater_content;
                                        endif;
                                    ?>
                                </div>
                            <?php
                        }
                    
                        $accordion_item_counter++;
                    endwhile;
                endif;
            ?>
        </div>
    </div>
</section>