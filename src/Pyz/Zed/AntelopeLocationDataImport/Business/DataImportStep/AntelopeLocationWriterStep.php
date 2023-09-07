<?php

namespace Pyz\Zed\AntelopeLocationDataImport\Business\DataImportStep;

use Orm\Zed\AntelopeLocation\Persistence\PyzAntelopeLocationQuery;
use Pyz\Shared\AntelopeLocationSearch\AntelopeLocationSearchConfig;
use Pyz\Zed\AntelopeLocationDataImport\Business\DataSet\AntelopeLocationDataSetInterface;
use Spryker\Zed\DataImport\Business\Model\DataImportStep\DataImportStepInterface;
use Spryker\Zed\DataImport\Business\Model\DataImportStep\PublishAwareStep;
use Spryker\Zed\DataImport\Business\Model\DataSet\DataSetInterface;

class AntelopeLocationWriterStep extends PublishAwareStep implements DataImportStepInterface
{
    public function execute(DataSetInterface $dataSet): void
    {
        $antelopeLocationEntity = PyzAntelopeLocationQuery::create();
        $locationName = $dataSet[AntelopeLocationDataSetInterface::COLUMN_LOCATION_NAME];
        $latitude = $dataSet[AntelopeLocationDataSetInterface::COLUMN_LATITUDE];
        $longitude = $dataSet[AntelopeLocationDataSetInterface::COLUMN_LONGITUDE];
        $description = $dataSet[AntelopeLocationDataSetInterface::COLUMN_DESCRIPTION];

        $antelopeLocation = $antelopeLocationEntity->filterByLocationName($locationName)
            ->findOneOrCreate();

        if ($antelopeLocation->isNew() || $antelopeLocation->isModified()) {
            $antelopeLocation->setLatitude($latitude);
            $antelopeLocation->setLongitude($longitude);
            $antelopeLocation->setDescription($description);
            $antelopeLocation->save();
            $this->addPublishEvents(AntelopeLocationSearchConfig::ANTELOPE_LOCATION_PUBLISH, $antelopeLocation->getIdAntelopeLocation());
        }
    }
}
