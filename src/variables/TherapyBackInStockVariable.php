<?php
/**
 * Therapy back in stock plugin for Craft CMS 3.x
 *
 * This is Therapy back in stock plugin.
 *
 * @link      https://github.com/AbRezaei
 * @copyright Copyright (c) 2022 Ab.Rezaei
 */

namespace abrezaei\therapybackinstock\variables;

use abrezaei\therapybackinstock\services\BackInStocks;
use abrezaei\therapybackinstock\TherapyBackInStock;
use Craft;

/**
 * Therapy back in stock Variable
 *
 * Craft allows plugins to provide their own template variables, accessible from
 * the {{ craft }} global variable (e.g. {{ craft.therapyBackInStock }}).
 *
 * https://craftcms.com/docs/plugins/variables
 *
 * @author    Ab.Rezaei
 * @package   TherapyBackInStock
 * @since     1.0.0
 */
class TherapyBackInStockVariable
{
    // Public Methods
    // =========================================================================

    /**
     * Whatever you want to output to a Twig template can go into a Variable method.
     * You can have as many variable functions as you want.  From any Twig template,
     * call it like this:
     *
     *     {{ craft.therapyBackInStock.backInStocks }}
     *
     * Or, if your variable requires parameters from Twig:
     *
     *     {{ craft.therapyBackInStock.backInStocks(twigValue) }}
     *
     * @param null $optional
     * @return string
     */
    public function backInStocks($optional = null)
    {
        return TherapyBackInStock::$plugin->backInStocks->getBackInStocks();
    }
}
