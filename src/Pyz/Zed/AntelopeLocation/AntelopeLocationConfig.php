<?php

declare(strict_types = 1);

namespace Pyz\Zed\AntelopeLocation;

use Spryker\Zed\Kernel\AbstractBundleConfig;
use Pyz\Shared\AntelopeLocation\AntelopeLocationConstants;

class AntelopeLocationConfig extends AbstractBundleConfig
{
    /**
     * @return int
     */
    public function getExampleQueueChunkSize(): int
    {
        return $this->get(AntelopeLocationConstants::EXAMPLE_QUEUE_CHUNK_SIZE, 500);
    }
}
