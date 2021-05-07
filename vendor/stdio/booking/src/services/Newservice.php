<?php
/**
 * booking plugin for Craft CMS 3.x
 *
 * booking plugin
 *
 * @link      studio.test
 * @copyright Copyright (c) 2019 devloper
 */

namespace stdio\booking\services;

use stdio\booking\Booking;

use Craft;
use craft\base\Component;

/**
 * Newservice Service
 *
 * All of your plugin’s business logic should go in services, including saving data,
 * retrieving data, etc. They provide APIs that your controllers, template variables,
 * and other plugins can interact with.
 *
 * https://craftcms.com/docs/plugins/services
 *
 * @author    devloper
 * @package   Booking
 * @since     1.0.0
 */
class Newservice extends Component
{
    // Public Methods
    // =========================================================================

    /**
     * This function can literally be anything you want, and you can have as many service
     * functions as you want
     *
     * From any other plugin file, call it like this:
     *
     *     Booking::$plugin->newservice->exampleService()
     *
     * @return mixed
     */
    public function exampleService()
    {
        $result = 'something';

        return $result;
    }
}
