<?php

declare(strict_types = 1);

namespace Pyz\Zed\AntelopeLocation\Communication\Plugin\Command;

use Spryker\Zed\Kernel\Communication\AbstractPlugin;
use Spryker\Zed\StateMachine\Dependency\Plugin\CommandPluginInterface;

/**
 * @method \Pyz\Zed\AntelopeLocation\Communication\AntelopeLocationCommunicationFactory getFactory()
 * @method \Pyz\Zed\AntelopeLocation\Business\AntelopeLocationFacadeInterface getFacade()
 */
class AntelopeLocationCommandPlugin  extends AbstractPlugin implements CommandPluginInterface
{
}
