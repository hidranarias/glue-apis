<?php

declare(strict_types = 1);

namespace Pyz\Zed\Antelope\Business\Writer;

use Pyz\Zed\Antelope\Persistence\AntelopeEntityManagerInterface;

class AntelopeWriter implements AntelopeWriterInterface
{
    private AntelopeEntityManagerInterface $antelopeEntityManager;

    /**
     * @param \Pyz\Zed\Antelope\Persistence\AntelopeEntityManagerInterface $antelopeEntityManager
     */
    public function __construct(AntelopeEntityManagerInterface $antelopeEntityManager)
    {
        $this->antelopeEntityManager = $antelopeEntityManager;
}
}