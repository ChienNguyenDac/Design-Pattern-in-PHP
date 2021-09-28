<?php

namespace NDC\Structural\Facade;

class Server{
    private $token = 'abcd';
    private $signed;
    private $accessTokenAdmin = 'admin';
    public function __construct($signed)
    {
        $this->signed;
    }
    public function login($username, $password){
        /*  default true & skip Validate */
        return $this->token . rand(0,1000) . $this->signed;
    }
    public function checkAdmin($accessToken){
        if( $accessToken === $this->accessTokenAdmin )
            return true;
        return false;
    }
}