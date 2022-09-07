<?php
abstract class FighterState
{
   protected Fighter $fighter;

   function __construct($fighter)
   {
      $this->fighter = $fighter;
   }

   abstract public function attack();
   abstract public function setFighter();
}
