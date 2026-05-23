<?php
class City{
  public $id_city;
  public $city_name;
  public $state_id;

  public function __construct($id_city = null, $city_name = null, $state_id = null)
  {
    $this->id_city = $id_city;
    $this->city_name = $city_name;
    $this->state_id = $state_id;
  }
}