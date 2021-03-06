<?php

/* constants */
define('_MAIN_CLASS_', 'col-sm-12');
define('_SIDEBAR_CLASS_', 'col-sm-3 col-sm-pull-9 hidden-xs');
define('_THEME_COLOR_', '#444');
define('_MOBILE_NAV_', true);
define('_TWOOBL_DEV_', true);
define('_TWOOBL_SCR_VERSION_', '2.1');
define('_JQUERY_VERSION_', '3.1.1');	// 1.12.4, 2.2.4 or 3.1.1
define('_ISOLANG_', substr(get_bloginfo('language'), 0, 2));

require_once locate_template('lib/scripts.php');
require_once locate_template('lib/widgets.php');
require_once locate_template('lib/shortcodes.php');
//require_once locate_template('lib/acf-init.php');
require_once locate_template('lib/tinymce.php');
require_once locate_template('lib/siteaccesschecker.php');
require_once locate_template('lib/twoobl.php');
require_once locate_template('lib/custom.php');
