<?php

declare(strict_types = 1);

namespace Pyz\Zed\AntelopeLocation\Business;

use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * @method \Pyz\Zed\AntelopeLocation\Business\AntelopeLocationBusinessFactory getFactory()
 */
class AntelopeLocationFacade extends AbstractFacade implements AntelopeLocationFacadeInterface
{
    /**
     * @param \Generated\Shared\Transfer\QueueReceiveMessageTransfer[] $queueMessageTransfers
     *
     * @return \Generated\Shared\Transfer\QueueReceiveMessageTransfer[]
     */
    public function processMessages(array $queueMessageTransfers): array
    {
        // return $this->getFactory()->createExampleQueueMessageProcessor()->processMessages($queueMessageTransfers);
    }
}
