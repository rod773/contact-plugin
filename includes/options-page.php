<?php


add_action( 'after_seup_theme','load_carbon_fields');

function load_carbon_fields(){
    Carbon_Fields::boot();
}