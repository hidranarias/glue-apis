<?php

declare(strict_types = 1);

namespace Pyz\Zed\AntelopeLocation\Business;

interface AntelopeLocationFacadeInterface
{
    /**
     * @param \Generated\Shared\Transfer\QueueReceiveMessageTransfer[] $queueMessageTransfers
     *
     * @return \Generated\Shared\Transfer\QueueReceiveMessageTransfer[]
     */
    public function processMessages(array $queueMessageTransfers): array;
}
