<?php

namespace NDC\Structural\Facade;
use NDC\Structural\Facade\Server;

class Client{
    private Server $server;
    private $username, $password;
    public function __construct(Server $server, $username, $password)
    {
        $this->server = $server;
        $this->$username = $username;
        $this->password = $password;
    }

    public function goToAdmin(){
        $token = $this->server->login($this->username, $this->password);
        if($this->server->checkAdmin($token))
            return true;
        return false;
    }
}