<?php

/**
 * Rabbit Developer Toolbar (http://mateuszsitek.com/projects/rabbit-developer-toolbar)
 *
 * @copyright Copyright (c) 2017 DIGITAL WOLVES LTD (http://digitalwolves.ltd) All rights reserved.
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 */

namespace Aist\Developer\Toolbar\Rabbit\Collector;

use Zend\Mvc\MvcEvent;
use ZendDeveloperTools\Collector\CollectorInterface;

/**
 * Elastic Data Collector
 */
class RabbitCollector implements CollectorInterface
{

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'elastic.toolbar';
    }

    /**
     * {@inheritDoc}
     */
    public function getPriority()
    {
        return 18;
    }

    /**
     * @inheritdoc
     */
    public function collect(MvcEvent $e)
    {
    }
}
