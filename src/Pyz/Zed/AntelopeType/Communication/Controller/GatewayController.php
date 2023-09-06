<?php

declare(strict_types = 1);

namespace Pyz\Zed\AntelopeType\Communication\Controller;

use Generated\Shared\Transfer\AntelopeTypeTransfer;
use Spryker\Zed\Kernel\Communication\Controller\AbstractGatewayController;

/**
 * @method \Pyz\Zed\AntelopeType\Communication\AntelopeTypeCommunicationFactory getFactory()
 * @method \Pyz\Zed\AntelopeType\Business\AntelopeTypeFacadeInterface getFacade()
 */
class GatewayController extends AbstractGatewayController
{
    /**
     * @param \Generated\Shared\Transfer\AntelopeTypeTransfer $antelopeTypeTransfer
     *
     * @return \Generated\Shared\Transfer\AntelopeTypeTransfer $antelopeTypeTransfer
     */
    public function customAction(AntelopeTypeTransfer $antelopeTypeTransfer): AntelopeTypeTransfer
    {
        return $this->getFacade()
                ->customAction($antelopeTypeTransfer);
    }
}
