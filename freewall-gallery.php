<?php
namespace Mrgrain\FreewallGallery;

/**
 * @link              
 * @since             1.0.0
 * @package           Mrgrain\FreewallGallery
 *
 * @wordpress-plugin
 * Plugin Name:       Freewall Gallery
 * Plugin URI:        
 * Description:       
 * Version:           1.0.0
 * Author:            Moritz Kornher
 * Author URI:        
 * License:           GPL-3.0+
 * Text Domain:       freewall-gallery
 * Domain Path:       /languages
 */


/**
 * If this file is called directly, abort.
 */
if (!defined('WPINC')) {
    die;
}

/**
 * Jumpstart your plugin
 */
require_once(__DIR__ . '/src/autoload.php');
(new Plugin(__FILE__))->jumpstart();
