<?php

declare(strict_types = 1);

namespace Pyz\Zed\AntelopeType\Business;

interface AntelopeTypeFacadeInterface
{
    /**
     * @param \Generated\Shared\Transfer\QueueReceiveMessageTransfer[] $queueMessageTransfers
     *
     * @return \Generated\Shared\Transfer\QueueReceiveMessageTransfer[]
     */
    public function processMessages(array $queueMessageTransfers): array;
}
