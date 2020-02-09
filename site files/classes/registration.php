<?php

class registration {

    public $insp_name;

    public $dev_name;

    public $stud_name;

    public $connection;


    public function __construct($connection) {

        $this->connection = $connection;

    }

    public function add_inspector() {
        // TODO implemet here
    }

    public function add_contentdev($name,$email,$expertise,$files) {
        // TODO implement here

          
    }

    public function add_student() {
        // TODO implement here
    }

    public function send_otp() {
        // TODO implement here
    }   

    public function validate_email() {
        // TODO implement here
    }

}