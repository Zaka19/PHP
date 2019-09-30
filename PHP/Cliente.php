<?php
    class Cliente{

        private $Login;
        private $Name;
        private $FirstName;
        private $Code;

        public function getLogin(){
            $this->Login;
        }
        public function getName(){
            $this->Name;
        }
        public function getFirstName(){
            $this->FirstName;
        }
        public function getCode(){
            $this->Code;
        }

        public function setLogin($_Login){
            $this->Login = $_Login;
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