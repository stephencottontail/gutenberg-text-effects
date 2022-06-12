<?php
/**
 * Plugin Name: Text Effects Blocks
 * Description: A collection of blocks showcasing various text effects
 * Version: 0.1.0
 * Author: Stephen Dickinson <stephencottontail@me.com>
 */

if ( ! defined( 'WPINC' ) ) {
    die;
}

if ( ! defined( 'TEXT_EFFECTS_BLOCKS_PLUGIN_DIR' ) ) {
    define( 'TEXT_EFFECTS_BLOCKS_PLUGIN_DIR', plugin_dir_path( __file__ ) );
}

if ( ! defined( 'TEXT_EFFECTS_BLOCKS_PLUGIN_URI' ) ) {
    define( 'TEXT_EFFECTS_BLOCKS_PLUGIN_URI', plugin_dir_url( __file__ ) );
}

if ( ! defined( 'TEXT_EFFECTS_PLUGIN_VERSION' ) ) {
    define( 'TEXT_EFFECTS_PLUGIN_VERSION', '0.1.0' );
}
