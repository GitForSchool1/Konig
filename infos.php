<?php

    class Infos{
        private int $emotivity = 0;
        private int $exp = 0;
        private int $hunger = 0;
        


        public static function __constructor(int $emotivity, int $exp, int $hunger){
            $this->$emotivity = $emotivity;
            $this->$exp = $exp;
            $this->$hunger = $hunger;
        }

        public static function __constructor_vuoto(){return __constructor(0,0,0);}

        public function getEmotivity():int{return $this->emotivity;}
        public function getExp():int{return $this->exp;}
        public function getHunger():int{return $this->hunger;}
        
        public function setEmotivity(int $emotivity){ $this->$emotivity = $emotivity;}
        public function setExp(int $exp){ $this->$exp = $exp;}
        public function setHunger(int $hunger){ $this->$hunger = $hunger;}
        
        public function toString():string{return "Fame: ".$this->getHunger()."<br>Emotività: ".$this->getEmotivity()."% <br>Esperienza: ".$this->getExp();}
    
    }
?>