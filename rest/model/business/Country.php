<?php
class Country{
  public $country_id;
  public $country_name;

  public function __construct($country_id = null, $country_name = null)
  {
    $this->country_id = $country_id;
    $this->country_name = $country_name;
  }
}