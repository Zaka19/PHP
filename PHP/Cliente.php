<?php
    class Cliente{

        private $Name;
        private $FirstName;
        private $Code;

        public function getName(){
            $this->Name;
        }
        public function getFName(){
            $this->FirstName;
        }
        public function getCode(){
            $this->Code;
        }

        public function setName($_Name){
            $this->Name = $_Name;
        }
        public function setFName($_FName){
            $this->FirstName = $_FName;
        }
        public function setCode($_Code){
            $this->Code = $_Code;
        }
    }
?>