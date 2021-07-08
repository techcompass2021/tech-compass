<?php
class EnemyGroup {
    private $enemyGroup = [];

    public function __construct(array $enemyGroup) {
        $this->enemyGroup = $enemyGroup;
    }

    public function encount() {
        echo "魔物の群れがあらわれた！";
    }

    public function attack() {

        foreach($this->enemyGroup as $key => $value) {
            echo ("<p>" . $value[0] . "の攻撃！" . "</p>");
            echo ("<p>" . $value[0] . "が" . $value[1] . "</p>");
        }

    }

}

?>