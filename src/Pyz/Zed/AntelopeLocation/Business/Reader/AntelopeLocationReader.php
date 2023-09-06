<?php

declare(strict_types = 1);

namespace Pyz\Zed\AntelopeLocation\Business\Reader;

use Generated\Shared\Transfer\AntelopeLocationCollectionTransfer;
use Generated\Shared\Transfer\AntelopeLocationCriteriaTransfer;
use Pyz\Zed\AntelopeLocation\Persistence\AntelopeLocationRepositoryInterface;

class AntelopeLocationReader implements AntelopeLocationReaderInterface
{
    private AntelopeLocationRepositoryInterface $antelopeLocationRepository;

    /**
     * @param \Pyz\Zed\AntelopeLocation\Persistence\AntelopeLocationRepositoryInterface $antelopeLocationRepository
     */
    public function __construct(AntelopeLocationRepositoryInterface $antelopeLocationRepository)
    {
        $this->antelopeLocationRepository = $antelopeLocationRepository;
    }

    /**
    * @param \Generated\Shared\Transfer\AntelopeLocationCriteriaTransfer $antelopeLocationCriteriaTransfer
    *
    * @return \Generated\Shared\Transfer\AntelopeLocationCollectionTransfer
    */
    public function findAntelopeLocation(AntelopeLocationCriteriaTransfer $antelopeLocationCriteriaTransfer): AntelopeLocationCollectionTransfer
    {
        // ToDo: Implementation
        // $this->antelopeLocationRepository->findAntelopeLocation($antelopeLocationCriteriaTransfer);
    }
}
