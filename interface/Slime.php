<?php
require_once('EnemyInterface.php');

class Slime implements EnemyInterface {
    private $nameSlime;

    public function __construct(string $nameSlime) {
        $this->nameSlime = $nameSlime;
    }

    public function getName() : string {
        return $this->nameSlime;
    }

    public function getAttackMessage() : string {
        return "体当たりしてきた！";
    }

    public function getEncountMessage() : string {
        return "{$this->nameSlime}がぷるぷるしている。";
    }
}

?>