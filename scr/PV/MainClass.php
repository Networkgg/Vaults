<?php
namespace PV;

use  pocketmine\server
use  pocketmine\plugin\PluginBase

class: Vaults/main

    public function onEnable(){
        $this->getLogger()->info("Vaults is now Enabled!");
    }

    public function onDisable(){
        $this->getLogger()->info("Vaults is now Disabled!");
    }
}
