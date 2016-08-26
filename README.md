# Cron Task Hooks

Cron Task Hooks is a super simple WordPress plugin that allows you to dynamically hook functions onto a scheduled task.

## Usage

Install the plugin, and then hook the function you want to run onto either of these actions:

* `ct_cron_hourly` - runs hourly
* `ct_cron_twicedaily` - runs twicedaily
* `ct_cron_daily` - runs daily

### Example

```php
function do_this_hourly() {
  // stuff
}
add_action('ct_cron_hourly', 'do_this_hourly');
```

## Important notes

Due to how the schedules are initialized, the scheduled tasks may not necessarily run _on the hour_. This means that if you want something to run at a specific time, then this plugin will not help you. This plugin is designed to run tasks at a specific _interval_ (i.e. hourly or daily), not time.
