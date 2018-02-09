<?php
/**
 * Translate plugin for Craft CMS 3.x
 *
 * Translation management plugin for Craft CMS
 *
 * @link      https://enupal.com
 * @copyright Copyright (c) 2018 Enupal
 */

namespace enupal\translate\services;

use craft\base\Component;

class App extends Component
{
    public $translate;

    public function init()
    {
        $this->translate = new Translate();
    }
}