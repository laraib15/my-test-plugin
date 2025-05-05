<?php
/**
 * Plugin Name: My Test Plugin
 * Description: A simple test plugin with a message.
 * Version: 1.0.1
 * Author: Your Name
 */

function my_test_plugin_admin_notice() {
    ?>
    <div class="notice notice-success is-dismissible">
        <p><?php _e('My Test Plugin is active and working!', 'my-test-plugin'); ?></p>
    </div>
    <?php
}
add_action('admin_notices', 'my_test_plugin_admin_notice');
