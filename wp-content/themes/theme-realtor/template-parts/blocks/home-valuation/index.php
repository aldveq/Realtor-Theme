<?php
     $home_valuation_title = get_field('home_valuation_title');
     $home_valuation_description = get_field('home_valuation_description');
     $home_valuation_form_title = get_field('home_valuation_form_title');
     $home_valuation_form_description = get_field('home_valuation_form_description');
?>

<section class="home-valuation-container">
    <?php
        if(!empty($home_valuation_title)):
            ?>
                <h1 class="home-valuation-container__main-title"><?php echo $home_valuation_title; ?></h1>
            <?php
        else:
            ?>
                <h1 class="home-valuation-container__main-title">Your title here</h1>
            <?php
        endif;
    ?>
    <div class="home-valuation-container__form-main-container">
        <div class="home-valuation-container__form-container">
            <?php
                if(!empty($home_valuation_form_title)):
                    ?>
                        <h3 class="home-valuation-container__form-title"><?php echo $home_valuation_form_title; ?></h3>
                    <?php
                else:
                    ?>
                        <h3 class="home-valuation-container__form-title">Your form title here</h3>
                    <?php
                endif;
            ?>
            <?php
                if(!empty($home_valuation_form_description)):
                    ?>
                        <p class="home-valuation-container__form-subtitle"><?php echo $home_valuation_form_description; ?></p>
                    <?php
                else:
                    ?>
                        <p class="home-valuation-container__form-subtitle">Your form description here</p>
                    <?php
                endif;
            ?>
            <?php echo do_shortcode('[contact-form-7 id="812" title="Home Valuation"]'); ?>
        </div>
    </div>
    <div class="home-valuation-container__content-container">
        <?php
            if(!empty($home_valuation_description)):
                echo $home_valuation_description;
            else:
                ?>
                    <p>Your description here</p>
                <?php
            endif;
        ?>
    </div>
</section>