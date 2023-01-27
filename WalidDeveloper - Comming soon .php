<?php
/*
Plugin Name: WalidDeveloper - Coming Soon & Under Construction Mode
Description: Allows you to enable a coming soon or under construction mode for your website Power by WalidDeveloper.
Version: 1.0
Author: WalidDeveloper.com
*/

function comingSoon_mode() {
    if (!current_user_can('edit_themes') || !is_user_logged_in()) {
        wp_die('Coming soon...');
    }
}
add_action('get_header', 'ComingSoon_mode');
?>
