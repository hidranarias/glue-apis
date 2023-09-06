<?php

declare(strict_types = 1);

namespace Pyz\Zed\AntelopeType\Business\Reader;

use Generated\Shared\Transfer\AntelopeTypeCollectionTransfer;
use Generated\Shared\Transfer\AntelopeTypeCriteriaTransfer;
use Pyz\Zed\AntelopeType\Persistence\AntelopeTypeRepositoryInterface;

class AntelopeTypeReader implements AntelopeTypeReaderInterface
{
    private AntelopeTypeRepositoryInterface $antelopeTypeRepository;

    /**
     * @param \Pyz\Zed\AntelopeType\Persistence\AntelopeTypeRepositoryInterface $antelopeTypeRepository
     */
    public function __construct(AntelopeTypeRepositoryInterface $antelopeTypeRepository)
    {
        $this->antelopeTypeRepository = $antelopeTypeRepository;
    }

    /**
    * @param \Generated\Shared\Transfer\AntelopeTypeCriteriaTransfer $antelopeTypeCriteriaTransfer
    *
    * @return \Generated\Shared\Transfer\AntelopeTypeCollectionTransfer
    */
    public function findAntelopeType(AntelopeTypeCriteriaTransfer $antelopeTypeCriteriaTransfer): AntelopeTypeCollectionTransfer
    {
        // ToDo: Implementation
        // $this->antelopeTypeRepository->findAntelopeType($antelopeTypeCriteriaTransfer);
    }
}
