<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace MagentoEse\DemoUpgrades\Setup\Patch\Data;

use Magento\Framework\Setup\Patch\DataPatchInterface;
use MagentoEse\DataInstall\Model\Process;
use Magento\Framework\Module\Manager;

class MsiDataInstall implements DataPatchInterface
{
    /** @var Process  */
    protected $process;

    /** @var Manager  */
    protected $moduleManager;

    public function __construct(Process $process, Manager $moduleManager)
    {
        $this->process = $process;
        $this->moduleManager = $moduleManager;
    }

    public function apply()
    {
        /**
         * $this->process->loadFiles(<name of module>,<data files directory (defaults to fixtures)>
         *
         * the data files directory can be any directory in the root of the module, or a subdirectory (fixtures/grocery)
         */

       /**Only run if this is the demo instance */
    //    if($this->moduleManager->isEnabled('MagentoEse_DemoAdminConfigurations')){
    //     $this->process->loadFiles(['filesource'=>'MagentoEse_DemoUpgrades','load'=>'msi_inventory/luma']);
    //    }
    //    /** Only run if venia catalog is installed */
    //    if($this->moduleManager->isEnabled('MagentoEse_VeniaCatalogSampleData')){
    //     $this->process->loadFiles(['filesource'=>'MagentoEse_DemoUpgrades','load'=>'msi_inventory/venia']);
    //    }
      
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
