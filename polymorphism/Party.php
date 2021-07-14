<?php 

class Party {
    public const PARTY_MAX = 4;
    private $partyArray = [];
    
    public function __construct(Hero $hero) {
        //クラス変数パーティに追加
        $this->partyArray[$hero->name] = $hero;
    }

    public function addHero(Hero $hero) : string {
        $name = $hero->name;
        if(count($this->partyArray) >= self::PARTY_MAX) {
            $addHeroMessage = "パーティーの上限数に達しています。";
        } else {
            $this->partyArray[$name] = $hero;
            $addHeroMessage = $name . "が仲間になりました!";
        }
        
        return $addHeroMessage;
    }

    public function allHeroAttack () {
        //クラス変数パーティが全員攻撃 
        foreach($this->partyArray as $key => $value) {
            echo  "<p>" . $key . "のターンです。</p>";
            echo  "<p>" . $value->attack() . "</p>";
        }
    }

}
