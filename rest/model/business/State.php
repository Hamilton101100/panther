<?php
class State{
  public $id_state;
  public $state;
  public $country_id;

  public function __construct($state_id = null, $state = null, $country_id = null)
  {
    $this->id_state= $state_id;
    $this->state = $state;
    $this->country_id = $country_id;
  }
}