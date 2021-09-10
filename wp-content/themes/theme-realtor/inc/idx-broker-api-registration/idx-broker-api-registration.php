<?php

foreach( glob( get_template_directory() . '/inc/idx-broker-api/*.php' ) as $idx_broker_api_settings ) {
    @include_once $idx_broker_api_settings;
}