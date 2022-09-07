<?php
class Fighter
{
   private FighterState $state;
   public Sleepy $sleepy;
   public Healthy $healthy;
   public Rage $rage;
   function __construct()
   {
      $this->state = new Healthy($this);
      $this->sleepy = new Sleepy($this);
      $this->rage = new Rage($this);
      $this->healthy = new Healthy($this);
   }

   public function setState(FighterState $state)
   {
      $this->state = $state;
   }

   public function getCurrentState()
   {
      return $this->state;
   }
}
