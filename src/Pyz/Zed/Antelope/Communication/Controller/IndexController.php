<?php

declare(strict_types = 1);

namespace Pyz\Zed\Antelope\Communication\Controller;

use Spryker\Zed\Kernel\Communication\Controller\AbstractController;
use stdClass;

/**
 * @method \Pyz\Zed\Antelope\Communication\AntelopeCommunicationFactory getFactory()
 * @method \Pyz\Zed\Antelope\Business\AntelopeFacadeInterface getFacade()
 */
class IndexController extends AbstractController
{
     public function indexAction()
     {
         $antelope = new stdClass();
         $antelope->name = 'Hidran';
         return $this->viewResponse([
             'antelope' => $antelope
         ]);
     }
}
