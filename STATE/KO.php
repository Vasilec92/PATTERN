<?php

require_once 'Fighter.php';
require_once 'FighterState.php';
require_once 'States/Healthy.php';

final class Sleepy implements FighterState
{
    /** @var Fighter */
    private $Fighter;
    
    public function attack(Fighter $Fighter) : void
    {
        echo $this->Fighter->name() . ' est KO ...' . PHP_EOL;

        $this->Fighter->changeState(new Healthy());
    }

    public function setFighter(Fighter $Fighter) : FighterState
    {
        $this->Fighter = $Fighter;
        
        return $this;
    }
}


abstract class FighterState {
  protected Fighter $fighter;
    
    function  __construct($fighter) {
    $this->fighter = $fighter
  }

  abstract public function attack();
  abstract public function setFighter();
 
}

class Fighter {
  private State $state;
  public  Sleepy $sleepy;
  public  Healthy $healthy;
  public Rage $rage;
    function __construct() {
    $this->state = new Healthy($this);
    $this->sleepy=new Sleepy($this);
    $this->rage=new Rage($this);
    $this->healthy = new Healthy($this);  
  }

   public function setState(State $state) {
            $this->state = $state;
        }

    public function getCurrentState(){
            return $this->state;
    }
}