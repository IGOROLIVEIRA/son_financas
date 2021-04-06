<?php
declare(strict_types = 1); //php para usar php 7 e 7.1 algumas coisas.
namespace SONFin;


interface ServiceContainerInterface
{
   public function add(string $name, $service);
   public function addLazy(string $name, callable $callable);
   public function get(string $name);
   public function has(string $name);
}