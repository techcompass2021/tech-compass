<?php
require_once('EnemyInterface.php');

class Drakiy implements EnemyInterface {
    private $nameDrakiy;

    public function __construct(string $nameDrakiy) {
        $this->nameDrakiy = $nameDrakiy;
    }

    public function getName() : string {
        return $this->nameDrakiy;
    }

    public function getAttackMessage() : string {
        return "噛みついてきた！";
    }

    public function getEncountMessage() : string {
        return "{$this->nameDrakiy}が警戒しながらこっちをみている。";
    }
}

?>