<?php 

class Party {
    public const PARTY_MAX = 4;
    private $partyArray = [];
    
    public function __construct(Hero $hero) {
        //クラス変数パーティに追加
        $this->partyArray[$hero->name] = $hero;
        //$this->attack = $hero->attack();
    }

    public function addHero(Hero $hero) : string {
        $this->name = $hero->name;
        
        if (in_array($hero, $this->partyArray )){
            $addHeroMessage = $this->name . "はすでに仲間にいます。";
        } elseif (count($this->partyArray) >= self::PARTY_MAX) {
            $addHeroMessage = "パーティーの上限数に達しています。";
        } else {
            $this->partyArray[$this->name] = $hero;
            $addHeroMessage = $this->name . "が仲間になりました!";
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
