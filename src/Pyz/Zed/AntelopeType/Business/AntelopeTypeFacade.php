<?php

declare(strict_types = 1);

namespace Pyz\Zed\AntelopeType\Business;

use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * @method \Pyz\Zed\AntelopeType\Business\AntelopeTypeBusinessFactory getFactory()
 */
class AntelopeTypeFacade extends AbstractFacade implements AntelopeTypeFacadeInterface
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
