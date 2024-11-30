<?php

require_once("Item.php");

class ItemAtaque extends Item
{

    public function __construct($nome, $classe)
    {
        parent::__construct($nome, $classe,  7 );
    }
}
