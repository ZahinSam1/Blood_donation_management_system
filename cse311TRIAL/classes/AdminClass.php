<?php 
    require 'UserClass.php';
    class Admin extends user{
        private $name = 'N/A';
        private $designation = 'N/A';
        private $info = 'N/A';
        private $access = true;
        private $canCheckRec = true;
        private $canAuthorizeAdmin = true;
        private $canTrackAllInfo = true;
        function __construct($name, $designation)
        {

            $this->name = $name;
            $this->designation = $designation;

        }

        //getters
        function getName(){
            return $this->name;
        }
        function getDesignation(){
            return $this->designation;
        }
        function getInfo(){
            return $this->info;
        }
        function getAccess(){
            return $this->access;
        }
        function getCanCheckRec(){
            return $this->canCheckRec;
        }
        function getCanAuthorizeAdmin(){
            return $this->canAuthorizeAdmin;
        }
        function getCanTrackAllInfo(){
            return $this->canTrackAllInfo;
        }


        //setters
        function setName($name){
            $this->name = $name;
        }
        function setDesignation($designation){
            $this->designation = $designation;
        }
        function setInfo($info){
            $this->info = $info;
        }
        function setAccess($access){
            $this->access = $access;
        }
        function setCanCheckRec($canCheckRec){
            $this->canCheckRec = $canCheckRec;
        }
        function setCanAuthorizeAdmin($canAuthorizeAdmin){
            $this->canAuthorizeAdmin = $canAuthorizeAdmin;
        }
        function setCanTrackAllInfo($canTrackAllInfo){
            $this->canTrackAllInfo = $canTrackAllInfo;
        }


        function __destruct()
        {
            
        }
    }





?>