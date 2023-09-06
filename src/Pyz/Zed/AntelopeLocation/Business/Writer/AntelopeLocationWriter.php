<?php

declare(strict_types = 1);

namespace Pyz\Zed\AntelopeLocation\Business\Writer;

use Pyz\Zed\AntelopeLocation\Persistence\AntelopeLocationEntityManagerInterface;

class AntelopeLocationWriter implements AntelopeLocationWriterInterface
{
    private AntelopeLocationEntityManagerInterface $antelopeLocationEntityManager;

    /**
     * @param \Pyz\Zed\AntelopeLocation\Persistence\AntelopeLocationEntityManagerInterface $antelopeLocationEntityManager
     */
    public function __construct(AntelopeLocationEntityManagerInterface $antelopeLocationEntityManager)
    {
        $this->antelopeLocationEntityManager = $antelopeLocationEntityManager;
}
}