<?php

declare(strict_types = 1);

namespace Pyz\Zed\AntelopeType;

use Spryker\Zed\Kernel\AbstractBundleConfig;
use Pyz\Shared\AntelopeType\AntelopeTypeConstants;

class AntelopeTypeConfig extends AbstractBundleConfig
{
    /**
     * @return int
     */
    public function getExampleQueueChunkSize(): int
    {
        return $this->get(AntelopeTypeConstants::EXAMPLE_QUEUE_CHUNK_SIZE, 500);
    }
}
