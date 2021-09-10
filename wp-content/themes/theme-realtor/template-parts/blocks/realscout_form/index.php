<?php 
    $background_color = get_field('realscout_block_background_color');
    $button_color = get_field('realscout_button_color');
    $button_font_color = get_field('realscout_button_font_color');
    $account_name = get_field('realscout_realtor_account');
?>
<script id="rs-embedded">
    (function() {
    var script = document.createElement("script");
    script.className = "rs-embedded-script";
    script.async = true;
    script.src = 'https://em.realscout.com/assets/em/v3/all.js';
    var entry = document.getElementsByTagName("script")[0];
    entry.parentNode.insertBefore(script, entry);
  })();
</script>

<div class="realscout-search advanced" data-rep="<?php echo $account_name ?>" 
    data-title-color="#fcfbf7" 
    data-button-color="<?php echo $button_color ?>" 
    data-button-font="<?php echo $button_font_color ?>" 
    data-background-color="<?php echo $background_color ?>" 
    style="width: px"></div>