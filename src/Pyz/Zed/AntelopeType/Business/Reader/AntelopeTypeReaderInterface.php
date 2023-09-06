<?php

declare(strict_types = 1);

namespace Pyz\Zed\AntelopeType\Business\Reader;

interface AntelopeTypeReaderInterface
{
    /**
    * @param \Generated\Shared\Transfer\AntelopeTypeCriteriaTransfer $antelopeTypeCriteriaTransfer
    *
    * @return \Generated\Shared\Transfer\AntelopeTypeCollectionTransfer
    */
    public function findAntelopeType(AntelopeTypeCriteriaTransfer $antelopeTypeCriteriaTransfer): AntelopeTypeCollectionTransfer;
}
