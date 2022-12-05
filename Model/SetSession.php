<?php

namespace MagentoEse\DemoUpgrades\Model;

use Magento\Framework\App\State;
use Magento\Framework\App\Area;

class SetSession
{

    /**
     * SetSession constructor.
     * @param State $state
     */
    public function __construct(State $state)
    {
        try{
            $state->setAreaCode(Area::AREA_ADMINHTML);
        }
        catch(\Magento\Framework\Exception\LocalizedException $e){
            // left empty
        }
    }

}
