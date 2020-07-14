<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace MagentoEse\Sample\Setup\Patch\Data;

use Magento\Framework\Setup\Patch\DataPatchInterface;
use MagentoEse\DemoUpgrades\Model\Process;

class Install implements DataPatchInterface
{
    /** @var Process  */
    protected $process;

    public function __construct(Process $process)
    {
        $this->process = $process;
    }

    public function apply()
    {
        /**
         * $this->process->loadFiles(<name of module>,<data files directory (defaults to fixtures)>
         *
         * the data files directory can be any directory in the root of the module, or a subdirectory (fixtures/grocery)
         */
       $this->process->loadFiles('MagentoEse_DemoUpgrades');
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
