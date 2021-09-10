<?php
    $free_consultation_form_title = get_field('free_consultation_form_title', 'option');
    $free_consultation_form_description = get_field('free_consultation_form_description', 'option');
    $free_consultation_form_description_of_the_areas = get_field('free_consultation_form_description_of_the_areas', 'option');

    $accent_color = get_field('color_palette_settings_accent_color', 'option');

?>

<section class="free-consultation-form">
    <div class="container">
        <?php
            if(!empty($free_consultation_form_title)):
                ?>
                    <h1 class="free-consultation-form__title"><?php echo $free_consultation_form_title; ?></h1>
                <?php
            else:
                ?>
                    <h1 class="free-consultation-form__title">Your title here</h1>
                <?php
            endif;
        ?>
        <div class="free-consultation-form__info-container">
            <?php
                if(!empty($free_consultation_form_description)):
                    echo $free_consultation_form_description;
                else: 
                    ?>
                        <p class="free-consultation-form__desc">Your form description here</p>
                    <?php
                endif;
            ?>
            <div class="free-consultation-form__areas-container">
                <?php
                    if(!empty($free_consultation_form_description_of_the_areas)):
                        echo $free_consultation_form_description_of_the_areas;
                    endif;
                ?>

                <ul class="free-consultation-form__area-list">
                    <?php
                        if( have_rows('free_consultation_form_areas_reapeter_column_one', 'option') ):
                            while( have_rows('free_consultation_form_areas_reapeter_column_one', 'option') ) : the_row();
                                $area_text_column_one = get_sub_field('free_consultation_form_area_text_column_one');
                                $area_text_column_one_target = $area_text_column_one['target'] ? $area_text_column_one['target'] : '_self';
                                ?>
                                    <li class="free-consultation-form__area-item"><a href="<?php echo $area_text_column_one['url']; ?>" class="button button__text" target="<?php echo $area_text_column_one_target; ?>" style="color: <?php echo $accent_color; ?>;"><?php echo $area_text_column_one['title']; ?></a></li>
                                <?php
                            endwhile;
                        endif;
                    ?>
                </ul>
                <ul class="free-consultation-form__area-list">
                    <?php
                        if( have_rows('free_consultation_form_areas_reapeter_column_two', 'option') ):
                            while( have_rows('free_consultation_form_areas_reapeter_column_two', 'option') ) : the_row();
                                $area_text_column_two = get_sub_field('free_consultation_form_area_text_column_two');
                                $area_text_column_two_target = $area_text_column_two['target'] ? $area_text_column_two['target'] : '_self'; 
                                ?>
                                    <li class="free-consultation-form__area-item"><a href="<?php echo $area_text_column_two['url']; ?>" class="button button__text" target="<?php echo $area_text_column_two_target; ?>" style="color: <?php echo $accent_color; ?>;"><?php echo $area_text_column_two['title']; ?></a></li>
                                <?php
                            endwhile;
                        endif;
                    ?>
                </ul>
            </div>
        </div>
        <div class="free-consultation-form__form-container">
            <?php
                echo do_shortcode('[contact-form-7 id="421" title="Free Consultation Form"]');
            ?>
        </div>
    </div>
</section>