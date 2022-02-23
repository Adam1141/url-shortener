<?php

    class Link {
        public $id;
        public $longUrl;
        public $clicks;
        public $status;
        public $passHash;
        public $dateCreated;

        function __construct($longUrl){
            $this->longUrl = $longUrl;
        }
    }

?>