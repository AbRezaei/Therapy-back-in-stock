<?php
/**
 * Therapy back in stock plugin for Craft CMS 3.x
 *
 * This is Therapy back in stock plugin.
 *
 * @link      https://github.com/AbRezaei
 * @copyright Copyright (c) 2022 Ab.Rezaei
 */

namespace abrezaei\therapybackinstock\services;

use abrezaei\therapybackinstock\TherapyBackInStock;

use Craft;
use craft\base\Component;

/**
 * BackInStocks Service
 *
 * All of your plugin’s business logic should go in services, including saving data,
 * retrieving data, etc. They provide APIs that your controllers, template variables,
 * and other plugins can interact with.
 *
 * https://craftcms.com/docs/plugins/services
 *
 * @author    Ab.Rezaei
 * @package   TherapyBackInStock
 * @since     1.0.0
 */
class BackInStocks extends Component
{
    // Public Methods
    // =========================================================================

    /**
     * This function can literally be anything you want, and you can have as many service
     * functions as you want
     *
     * From any other plugin file, call it like this:
     *
     *     TherapyBackInStock::$plugin->backInStocks->getBackInStocks()
     *
     * @return mixed
     */
    public function getBackInStocks()
    {
        return (new \yii\db\Query())
            ->select(['id','dateCreated', 'email','variantId','isNotified'])
            ->from('backinstock_records')
            ->where(array(
                'isNotified' => 0
            ))
            ->all();
    }
}
