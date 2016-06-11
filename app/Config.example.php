<?php
/**
 * Config - an example for setting up system settings.
 * When you are done editing, rename this file to 'Config.php'.
 *
 * @author David Carr - dave@daveismyname.com
 * @author Edwin Hoksberg - info@edwinhoksberg.nl
 * @author Virgil-Adrian Teaca - virgil@giulianaeassociati.com
 * @version 3.0
 */

use Core\Config;

/**
 * Set the Framework version.
 */
define('VERSION', trim(file_get_contents(ROOTDIR .'VERSION.txt')));

/**
 * Define the complete site URL.
 */
define('SITEURL', 'http://www.novaframework.dev/');

/**
 * Define relative base path.
 */
define('DIR', '/');

/**
 * Set timezone.
 */
define('DEFAULT_TIMEZONE', 'Europe/London');

/**
 * Set default controller and method for legacy calls.
 */
define('DEFAULT_CONTROLLER', 'Welcome');
define('DEFAULT_METHOD', 'index');

/**
 * Set the default template.
 */
define('TEMPLATE', 'Default');

/**
 * Set a default language.
 */
define('LANGUAGE_CODE', 'en');

//
// database details ONLY NEEDED IF USING A DATABASE

/**
 * Database engine, default is mysql.
 */
define('DB_TYPE', 'mysql');

/**
 * Database host, default is localhost.
 */
define('DB_HOST', 'localhost');

/**
 * Database name.
 */
define('DB_NAME', 'nova');

/**
 * Database username.
 */
define('DB_USER', 'root');

/**
 * Database password.
 */
define('DB_PASS', '');

/**
 * PREFER to be used in database calls, default is nova_
 */
define('PREFIX', 'nova_');

/**
 * Set a prefix for Sessions.
 */
define('SESSION_PREFIX', 'nova_');

/**
 * OPTIONAL, create a constant for the name of the site.
 */
define('SITETITLE', 'Nova V3.0');

/**
 * OPTIONAL, set a site email address.
 */
// define('SITEEMAIL', 'email@domain.com');

/**
 * Define a 32 bit Encryption Key.
 * This tool can be used to generate key - http://jeffreybarke.net/tools/codeigniter-encryption-key-generator
 */
define('ENCRYPT_KEY', '');

/**
 * Setup the Config API Mode.
 * For using the 'database' mode, you need to have a database, with a table generated by 'scripts/nova_options'
 */
define('APPCONFIG_STORE', 'files'); // Supported: "files", "database"

/**
 * Setup the Logger configuration
 */
Config::set('logger', array(
    'displayErrors' => false,
));

/**
 * Setup the Profiler configuration
 */
Config::set('profiler', array(
    'useForensics' => false,
    'withDatabase' => false,
));

/**
 * Setup the Google reCAPTCHA configuration
 */
Config::set('recaptcha', array(
    'active'  => false,
    'siteKey' => '',
    'secret'  => '',
));

/**
 * Include the configuration files located on application's Config directory.
 *
 * DO NOT MODIFY THE FOLLOWING CODE:
 */
foreach (glob(APPDIR .'Config/*') as $configFile) {
    require $configFile;
}
