<?php
namespace PV;

use  pocketmine\server
use  pocketmine\plugin\PluginBase

class: Vaults/main

    public function onEnable(){
        $this->getLogger()->info("Vaults is now Enabled!");
    }
    public function onCommand(CommandSender $sender, Command $command, $label, array $args){
    if(strtolower($command->getName()) === "pv"){
        // Execute logic
        return true;
    }

    return false;
}

    public function onDisable(){
        $this->getLogger()->info("Vaults is now Disabled!");
    }
}
