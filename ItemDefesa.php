<?php

require_once("Item.php");

class ItemDefesa extends Item
{

    public function __construct($nome, $classe)
    {

        parent::__construct($nome, $classe, 4);
    }
}
