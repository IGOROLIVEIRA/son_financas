<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 27/02/2018
 * Time: 08:26
 */

namespace SONFin\Models;


interface UserInterface
{
    public function getId():int;
    public function getFullname():string;
    public function getEmail():string;
    public function getPassword():string;

}