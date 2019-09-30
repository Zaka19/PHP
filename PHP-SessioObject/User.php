<?php
    class User{
        
        private $NameUser;
        private $Name;
        private $FirstName;
        private $Code;

        public function getNameUser(){
            return $this->NameUser;
        }
        public function getName(){
            return $this->Name;
        }
        public function getFirstName(){
            return $this->FirstName;
        }
        public function getCode(){
            return $this->Code;
        }
        
        public function setNameUser($_NameUser){
            $this->NameUser = $_NameUser;
        }
        public function setName($_Name){
            $this->Name = $_Name;
        }
        public function setFirstName($_FName){
            $this->FirstName = $_FName;
        }
        public function setCode($_Code){
            $this->Code = $_Code;
        }
    }
?>