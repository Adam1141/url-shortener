<?php

    class Link {
        private $id;
        private $longUrl;
        private $clicks;
        private $status;
        private $passHash;
        private $dateCreated;


        

        function __construct($longUrl){
            $this->longUrl = $longUrl;
        }

        function setId($id) {
            $this->id = $id;
        }

        function getId(){
            return $this->id;
        }

        function setLongUrl($longUrl) {
            $this->longUrl = $longUrl;
        }

        function getLongUrl(){
            return $this->longUrl;
        }

        function setClicks($clicks) {
            $this->clicks = $clicks;
        }

        function getClicks(){
            return $this->clicks;
        }

        function setStatus($status) {
            $this->status = $status;
        }

        function getStatus(){
            return $this->status;
        }

        function setPassHash($passHash) {
            $this->passHash = $passHash;
        }

        function getPassHash(){
            return $this->passHash;
        }

        function setDateCreated($dateCreated) {
            $this->dateCreated = $dateCreated;
        }

        function getDateCreated(){
            return $this->dateCreated;
        }



    }






?>