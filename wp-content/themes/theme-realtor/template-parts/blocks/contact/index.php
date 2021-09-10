<?php
    $contact_information_settings_contact_information_group = get_field('contact_information_settings_contact_information_group', 'option');
    $contact_address = get_field('contact_address');
    $contact_hours = get_field('contact_hours');

    $accent_color = get_field('color_palette_settings_accent_color', 'option');

?>

<section class="contact-container">
    <div class="contact-container__contact-info-container">
        <h2 class="contact-container__main-title"><?php echo the_title(); ?></h2>
        <div class="contact-container__phone-container">
            <span class="contact-container__phone-label">Phone:</span>
            <?php 
                if(!empty($contact_information_settings_contact_information_group)):
                    $contact_phone_number = $contact_information_settings_contact_information_group['contact_information_group_phone_number'];
                    ?>
                        <a href="tel:<?php echo $contact_phone_number; ?>" class="button button__outline contact-container__phone-button" style="color: <?php echo $accent_color; ?>;"><?php echo $contact_phone_number; ?></a>
                    <?php
                else:
                    ?>
                        <a href="tel:(000) 000-0000" class="button button__outline contact-container__phone-button" style="color: #F44E65;">(000) 000-0000</a>
                    <?php
                endif;
            ?>
        </div>
        <div class="contact-container__email-container">
            <span class="contact-container__email-label">Email:</span>
            <?php
                if(!empty($contact_information_settings_contact_information_group)):
                    $contact_email = $contact_information_settings_contact_information_group['contact_information_group_contact_email'];
                    ?>
                        <a href="mailto:<?php echo $contact_email; ?>" class="button button__outline contact-container__email-button" style="color: <?php echo $accent_color; ?>;"><?php echo $contact_email; ?></a>
                    <?php
                else:
                    ?>
                        <a href="mailto:example@example.com" class="button button__outline contact-container__email-button" style="color: #F44E65;">example@example.com</a>
                    <?php
                endif;
            ?>
        </div>
        <div class="contact-container__address-container">
            <span class="contact-container__address-label">Address:</span>
            <?php 
                if(!empty($contact_address)):
                    ?>
                        <span class="contact-container__address-text"><?php echo $contact_address; ?></span>
                    <?php
                else:
                    ?>
                        <span class="contact-container__address-text">Your office address here</span>
                    <?php
                endif;
            ?>
        </div>
        <div class="contact-container__hours-container">
            <span class="contact-container__hours-label">Hours:</span>
            <?php
                if(!empty($contact_hours)):
                    ?>
                        <span class="contact-container__hours-text"><?php echo $contact_hours; ?></span>
                    <?php
                else:
                    ?>
                        <span class="contact-container__hours-text">Your office hours here</span>
                    <?php
                endif;
            ?>
        </div>
    </div>
    <div class="contact-container__map-container">
        <div class ="contact-container__map" id="contactMap"></div>
    </div>
</section>

