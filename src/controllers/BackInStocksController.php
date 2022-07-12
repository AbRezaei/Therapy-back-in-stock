<?php
/**
 * Therapy back in stock plugin for Craft CMS 3.x
 *
 * This is Therapy back in stock plugin.
 *
 * @link      https://github.com/AbRezaei
 * @copyright Copyright (c) 2022 Ab.Rezaei
 */

namespace abrezaei\therapybackinstock\controllers;

use abrezaei\therapybackinstock\TherapyBackInStock;

use Craft;
use craft\web\Controller;

/**
 * BackInStocks Controller
 *
 * Generally speaking, controllers are the middlemen between the front end of
 * the CP/website and your plugin’s services. They contain action methods which
 * handle individual tasks.
 *
 * A common pattern used throughout Craft involves a controller action gathering
 * post data, saving it on a model, passing the model off to a service, and then
 * responding to the request appropriately depending on the service method’s response.
 *
 * Action methods begin with the prefix “action”, followed by a description of what
 * the method does (for example, actionSaveIngredient()).
 *
 * https://craftcms.com/docs/plugins/controllers
 *
 * @author    Ab.Rezaei
 * @package   TherapyBackInStock
 * @since     1.0.0
 */
class BackInStocksController extends Controller
{

    // Protected Properties
    // =========================================================================

    /**
     * @var    bool|array Allows anonymous access to this controller's actions.
     *         The actions must be in 'kebab-case'
     * @access protected
     */
    protected $allowAnonymous = ['index', 'do-something'];

    // Public Methods
    // =========================================================================

    /**
     * Handle a request going to our plugin's index action URL,
     * e.g.: actions/therapy-back-in-stock/back-in-stocks
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $result = 'Welcome to the BackInStocksController actionIndex() method';

        return $result;
    }

    /**
     * Handle a request going to our plugin's actionDoSomething URL,
     * e.g.: actions/therapy-back-in-stock/back-in-stocks/do-something
     *
     * @return mixed
     */
    public function actionDoSomething()
    {
        $result = 'Welcome to the BackInStocksController actionDoSomething() method';

        return $result;
    }
}
