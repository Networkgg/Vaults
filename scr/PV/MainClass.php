<?php
namespace PV;

use pocketmine\Server;
use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;

use pocketmine\

class MainClass implements PluginBase

    public function onEnable(){
        $this->saveDefaultConfig();
        $this->reloadConfig();
        $this->getLogger()->info("Vaults is now Enabled!");
    }
    
    public function onCommand(CommandSender $sender, Command $command, $label, array $args){
    if(strtolower($command->getName()) === "pv"){
        // Execute logic
        return true;
    }

    return false;
}
    public function 
    public function onDisable(){
        $this->getLogger()->info("Vaults is now Disabled!");
    }
}
