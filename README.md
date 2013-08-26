plugin-safe-mode
================

Enables a debugging safe mode by preventing any plugins from loading.  

To activate safe mode:

- add define( 'WP_DISABLE_PLUGINS', true ); to wp-config.php
- Append the query string ?safe_mode=true to any url and the page will be loaded without any plugins active

See: http://core.trac.wordpress.org/ticket/25137
