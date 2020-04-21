<?php

namespace Krip9Gamer\SimpleFeed;

use pocketmine\plugin\PluginBase;
use pocketmine\command\{
    Command, CommandSender
};
use pocketmine\Utils\TextFormat as C;

class Main extends PluginBase{

    public function onLoad(): void{
        $this->getLogger()->info(C::YELLOW . "Loading SimpleFeeding");
    }

    public function onEnable(): void{
        $this->getLogger()->info(C::GREEN . "Enabling SimpleFeeding");
    }

    public function onDisable(): void{
        $this->getLogger()->info(C::RED . "Disabling SimpleFeeding");
    }

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool{
        switch($command){
            case "feed":
             //sender is the player
            if($sender->getFood() == 20){
                $sender->sendMessage(C::RED . "Your Hunger Bar is currently Full");
            }
            $sender->setFood(20);
            $sender->sendMessage(C::GREEN . "You have been Fed");
            break;

        }
        return true;
    }
}