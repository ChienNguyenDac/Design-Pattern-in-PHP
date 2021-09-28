<?php

namespace NDC\Structural\Adapter;
use NDC\Structural\Adapter\sayVN;

class Say implements SayInterface{
    private $sayvn;

    public function __construct(sayVN $sayvn)
    {
        $this->sayvn = $sayvn;
    }
    
    public function translate($text){
        //  change en -> vn
        return 'Xin chao!';
    }

    public function say($text){
        $text_translated = $this->translate($text);
        return $this->sayvn->say($text_translated);
    }

}