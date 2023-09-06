<?php

declare(strict_types = 1);

namespace Pyz\Zed\AntelopeLocation\Communication\Controller;

use Generated\Shared\Transfer\AntelopeLocationTransfer;
use Spryker\Zed\Kernel\Communication\Controller\AbstractGatewayController;

/**
 * @method \Pyz\Zed\AntelopeLocation\Communication\AntelopeLocationCommunicationFactory getFactory()
 * @method \Pyz\Zed\AntelopeLocation\Business\AntelopeLocationFacadeInterface getFacade()
 */
class GatewayController extends AbstractGatewayController
{
    /**
     * @param \Generated\Shared\Transfer\AntelopeLocationTransfer $antelopeLocationTransfer
     *
     * @return \Generated\Shared\Transfer\AntelopeLocationTransfer $antelopeLocationTransfer
     */
    public function customAction(AntelopeLocationTransfer $antelopeLocationTransfer): AntelopeLocationTransfer
    {
        return $this->getFacade()
                ->customAction($antelopeLocationTransfer);
    }
}
