<?php
namespace Mrgrain\FreewallGallery;

use Jumpstart\Battery\I18n;
use Mrgrain\FreewallGallery\ExampleComponent\Example as ExampleComponent;

/**
 * The core plugin class.
 *
 * This is used to define internationalization and load components.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      1.0.0
 * @package    Mrgrain\FreewallGallery
 * @author     Moritz Kornher ()
 */
class Plugin extends \Jumpstart\Battery\Plugin
{
    /**
     * Define the core functionality of the plugin.
     *
     * Set the plugin name and the plugin version that can be used throughout the plugin.
     * Define the locale and load the components.
     *
     * @since       1.0.0
     * @access      public
     * @param string $filename
     */
    public function __construct($filename)
    {
        $this->slug = 'freewall-gallery';
        $this->version = '1.0.0';

        // Run the plugin
        parent::__construct($filename);
    }

    /**
     * Load components and register hooks with WordPress.
     *
     * @since       1.0.0
     * @access      protected
     */
    protected function run()
    {
        /**
         * Components:
         * - I18n for internationalization
         * - SampleComponent as an example, add your functionality there.
         */
        //new I18n($this->getSlug(), $this->getPath(), $this->getLoader());
        //new ExampleComponent($this->getLoader());

        /**
         * For a small plugin, you might want to define your actions directly in here:
         */
        //$this->loader->action('action_name', function () {}, 10, 1);
        //$this->loader->style('resource.css', array(), 'both', 'all');
    }
}
