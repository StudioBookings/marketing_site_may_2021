<?php
/**
 * booking plugin for Craft CMS 3.x
 *
 * booking plugin
 *
 * @link      studio.test
 * @copyright Copyright (c) 2019 devloper
 */

namespace stdio\booking\variables;

use stdio\booking\Booking;

use Craft;

/**
 * booking Variable
 *
 * Craft allows plugins to provide their own template variables, accessible from
 * the {{ craft }} global variable (e.g. {{ craft.booking }}).
 *
 * https://craftcms.com/docs/plugins/variables
 *
 * @author    devloper
 * @package   Booking
 * @since     1.0.0
 */
class BookingVariable
{
    // Public Methods
    // =========================================================================

    /**
     * Whatever you want to output to a Twig template can go into a Variable method.
     * You can have as many variable functions as you want.  From any Twig template,
     * call it like this:
     *
     *     {{ craft.booking.exampleVariable }}
     *
     * Or, if your variable requires parameters from Twig:
     *
     *     {{ craft.booking.exampleVariable(twigValue) }}
     *
     * @param null $optional
     * @return string
     */
    public function getToken($optional = null)
    {
        $token_url = "https://studiobookingsonline.com/business/signup/generatetoken";
        $token = file_get_contents($token_url);
        return $token;
    }
    
    
    public function getStudioURL() {
        
        $url_arr = explode("/", $_SERVER["REQUEST_URI"]);
        $studio_name = end($url_arr);
        
        $token_url = "https://studiobookingsonline.com/business/signup/checkstudioexist/studioname/".$studio_name;
        $exist = file_get_contents($token_url);
        
        if (!empty($exist)) {
            return "https://studiobookingsonline.com/" . $studio_name;
        } else {
            return "https://studiobookings.com/nobusinessfound/";
        }
    }
    
}
