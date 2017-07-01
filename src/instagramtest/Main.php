<?php
namespace instagramtest;
use pocketmine\plugin\PluginBase;
class Main extends PluginBase{
 public function onEnable(){
  $this->getServer()->getLogger()->info("plugin has been enabled");
