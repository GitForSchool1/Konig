<?php

    class Infos{
        private int $emotivity;
        private int $exp;
        private int $hunger;
        


        public static function __constructor(int $emotivity, int $exp, int $hunger){
            $this->$emotivity = $emotivity;
            $this->$exp = $exp;
            $this->$hunger = $hunger;
        }

        public static function __constructor_vuoto(){
            return __constructor(0,0,0);
        }

        public function getEmotivity():int{return $emotivity;}
        public function getExp():int{return $exp;}
        public function getHunger():int{return $hunger;}
        
        public function setEmotivity(int $emotivity){ $this->$emotivity = $emotivity;}
        public function setExp(int $exp){ $this->$exp = $exp;}
        public function setHunger(int $hunger){ $this->$hunger = $hunger;}
    
    
    }
?>