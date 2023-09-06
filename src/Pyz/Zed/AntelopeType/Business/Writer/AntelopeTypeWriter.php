<?php

declare(strict_types = 1);

namespace Pyz\Zed\AntelopeType\Business\Writer;

use Pyz\Zed\AntelopeType\Persistence\AntelopeTypeEntityManagerInterface;

class AntelopeTypeWriter implements AntelopeTypeWriterInterface
{
    private AntelopeTypeEntityManagerInterface $antelopeTypeEntityManager;

    /**
     * @param \Pyz\Zed\AntelopeType\Persistence\AntelopeTypeEntityManagerInterface $antelopeTypeEntityManager
     */
    public function __construct(AntelopeTypeEntityManagerInterface $antelopeTypeEntityManager)
    {
        $this->antelopeTypeEntityManager = $antelopeTypeEntityManager;
}
}