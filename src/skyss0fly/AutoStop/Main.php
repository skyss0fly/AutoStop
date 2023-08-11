<?php 
namespace skyss0fly\AutoStop;

use pocketmine\plugin\PluginBase;
use DateTime;

class Main extends PluginBase {

public function onLoad(): void {
$this->saveDefaultConfig();
$cfg = $this->getConfig();
$this->time();


}
  public function time() {
$timenow = $this->DateTime()->TimeNow();
    $cfg = $this->getConfig();

    sleep($cfg * 60)
    $this->getServer()->stopServer();
  }
}
