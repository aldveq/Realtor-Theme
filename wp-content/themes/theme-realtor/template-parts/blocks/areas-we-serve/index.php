<section class="areas-we-serve">
    <div class="container">
        <?php
            if( have_rows( 'location_settings_areas_location_group_areas_repeater', 'option' )):
                ?>
                    <div class="areas-we-serve__button-container">
                <?php
                        while( have_rows( 'location_settings_areas_location_group_areas_repeater', 'option' ) ) : the_row();
                            $area_link = get_sub_field('location_settings_areas_location_repeater_areas_link');
                            $area_link_target = $area_link['target'] ? $area_link['target'] : '_self';
                            ?>
                                <a href="<?php echo $area_link['url']; ?>" class="button button__outline button__icon button__outline--right-arrow areas-we-serve__buton" target="<?php echo $area_link_target; ?>" style="color: #f44e65;"><?php echo $area_link['title']; ?><span></span></a>
                            <?php
                        endwhile;   
                ?>
                    </div>
                <?php
            endif;
        ?>
    </div>
    <div class="areas-we-serve__map-container">
        <div class="areas-we-serve__map" id="areasMap"></div>
    </div>
</section>