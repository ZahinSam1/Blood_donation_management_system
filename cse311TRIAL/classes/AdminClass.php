<?php 
    require 'UserClass.php';
    class Admin extends user{
        private $designation = 'N/A';
        private $access = true;
        private $canCheckRec = true;
        private $canAuthorizeAdmin = true;
        private $canTrackAllInfo = true;
        function __construct($designation)
        {

            $this->setDesignation($designation);

        }

        //getters
        function getDesignation(){
            return $this->designation;
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
        function setDesignation($designation){
            $this->designation = $designation;
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