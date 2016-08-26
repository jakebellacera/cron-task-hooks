<?php defined('ABSPATH') or die();

/*
Plugin Name: Cron Task Hooks
Plugin URI: https://github.com/jakebellacera/cron-task-hooks
Description: Hook your custom functions onto WordPress' scheduled cron jobs.
Version: 1.0.0
Author: Jake Bellacera
Author URI: http://jakebellacera.com
GitHub Plugin URI: https://github.com/jakebellacera/cron-task-hooks
*/

// Register hooks on activation
register_activation_hook(__FILE__, 'ct_activation');
function ct_activation() {
  wp_schedule_event(time(), 'hourly', 'ct_cron_hourly');
  wp_schedule_event(time(), 'twicedaily', 'ct_cron_twicedaily');
  wp_schedule_event(time(), 'daily', 'ct_cron_daily');
}

// Clear hooks no deactivation
register_deactivation_hook(__FILE__, 'ct_deactivation');
function ct_deactivation() {
  wp_clear_scheduled_hook('ct_cron_hourly');
  wp_clear_scheduled_hook('ct_cron_twicedaily');
  wp_clear_scheduled_hook('ct_cron_daily');
}
