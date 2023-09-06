<?php

declare(strict_types = 1);

namespace Pyz\Zed\AntelopeLocation\Business\Reader;

interface AntelopeLocationReaderInterface
{
    /**
    * @param \Generated\Shared\Transfer\AntelopeLocationCriteriaTransfer $antelopeLocationCriteriaTransfer
    *
    * @return \Generated\Shared\Transfer\AntelopeLocationCollectionTransfer
    */
    public function findAntelopeLocation(AntelopeLocationCriteriaTransfer $antelopeLocationCriteriaTransfer): AntelopeLocationCollectionTransfer;
}
