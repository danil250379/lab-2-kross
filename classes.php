<?php
include_once "lang.php";
session_start();
class Visiter{
        protected $login; 
        protected $password;
        protected $name;
        protected $surname;
        protected $role;
        protected $lang;

        function __construct($arr) {
            $this->login = $arr["login"];
            $this->password = $arr["password"];
            $this->name = $arr["name"];
            $this->surname = $arr["surname"];
            $this->role = $arr["role"];
            $this->lang = $arr["lang"];
        }

        function getInfo($wordsArr){
            switch($this->role){
                case 'admin': echo $wordsArr[$this->lang]['greeting']." ".$this->role." ".$this->name." ".$this->surname.'. '
                .$wordsArr[$this->lang]['adminInformation'];
                    break;
                case 'client': echo $wordsArr[$this->lang]['greeting']." ".$this->role." ".$this->name." ".$this->surname.'. '
                .$wordsArr[$this->lang]['clientIformation'];
                    break;
                case 'manager': echo $wordsArr[$this->lang]['greeting']." ".$this->role." ".$this->name." ".$this->surname.'. '
                .$wordsArr[$this->lang]['managerInformation'];
                    break;
            };
          }
         function getLang(){
              return $this->lang;
          }
          function changeLang($newLang){
            $this->lang = $newLang;
          }
          function getRole(){
              return $this->role;
          }

        };
        class ManagerClass extends Visiter{
            function isManager(){
                return $this->role === 'manager';
            }

        };
        class ClientClass extends Visiter{
            function isClient(){
                return $this->role === 'client';
            }
        };
        class AdminClass extends Visiter{
            function isAdmin(){
                return $this->role === 'admin';
            }
        };
    ?>