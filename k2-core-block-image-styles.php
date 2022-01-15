<?php
/**
 * Plugin Name: K2 Core Block Image Styles
 * Plugin URI: https://maheshwaghmare.com/k2-core-block-image-styles/
 * Description: This plugin adds a new image styles for the WordPress Core Image block. <a href="https://maheshwaghmare.com/k2-core-block-image-styles/">See documentation.</a>
 * Version: 1.0.0
 * Author: Mahesh M. Waghmare
 * Author URI: https://maheshwaghmare.com/
 * Text Domain: k2cbis
 *
 * @package K2CBIS
 */

define( 'K2CBIS_VER', '1.0.0' );
define( 'K2CBIS_FILE', __FILE__ );
define( 'K2CBIS_BASE', plugin_basename( K2CBIS_FILE ) );
define( 'K2CBIS_DIR', plugin_dir_path( K2CBIS_FILE ) );
define( 'K2CBIS_URI', plugins_url( '/', K2CBIS_FILE ) );

require_once K2CBIS_DIR . 'classes/class-k2cbis.php';
