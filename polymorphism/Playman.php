<?php 
class Playman extends Hero {
    public function attack() : string {
        $randomNumber = mt_rand(1, 100);
        $chance = 70;
        if($chance >= $randomNumber) { 
            //70%
            $attack = "短剣で攻撃しました！";
        } else {
            //30%
            $attack = "口笛を吹き、スライムを呼び寄せた。。。";
        }
        return $attack;
    }

}