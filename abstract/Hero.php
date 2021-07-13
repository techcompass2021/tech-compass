<?php

//Heroクラス作成
abstract class Hero {
    //プロパティ定義
    public $name;
    private $gender;
    private $job;
    private $hp;
    private $mp;
    private $attack;
    private $defense;

    //コンストラクタ作成
    public function __construct(string $name, string $gender, string $job, int $hp, int $mp, int $attack, int $defense) {
        $this->name = $name;
        $this->gender = $gender;
        $this->job = $job;
        $this->hp = $hp;
        $this->mp = $mp;
        $this->attack = $attack;
        $this->defense = $defense;
    }

    abstract public function attack();
    
} 

?>