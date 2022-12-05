<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace MagentoEse\DemoUpgrades\Setup\Patch\Data;

use Magento\Framework\Setup\Patch\DataPatchInterface;
use MagentoEse\DemoUpgrades\Model\SetSession;
use MagentoEse\DataInstall\Model\Process;
use MagentoEse\DataInstall\Api\Data\DataPackInterfaceFactory;

class Install implements DataPatchInterface
{
    /** @var Process  */
    protected $process;

    /** @var DataPackInterfaceFactory */
    protected $dataPackInterface;

    public function __construct(SetSession $setSession, Process $process, DataPackInterfaceFactory $dataPackInterface)
    {
        $this->process = $process;
        $this->dataPackInterface = $dataPackInterface;
    }

    public function apply()
    {
        /**
         * $this->process->loadFiles(<name of module>,<data files directory (defaults to fixtures)>
         *
         * the data files directory can be any directory in the root of the module, or a subdirectory (fixtures/grocery)
         */
       $dataPack = $this->dataPackInterface->create();
       $dataPack->setDataPackLocation('MagentoEse_DemoUpgrades'); 
       $this->process->loadFiles($dataPack);
    }

    public static function getDependencies()
    {
        return [];
    }

    public function getAliases()
    {
        return [];
    }
}
