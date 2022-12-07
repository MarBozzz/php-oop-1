<?php
class Genres
{
  public $action;
  public $horror;
  public $thriller;
  public $fantasy;
  public $drama;
  public $comedy;
  
  /**
   * @param String $action
   * @param String $horror
   * @param String $thriller
   * @param String $fantasy
   * @param String $drama
   * @param String $comedy
   */

  public function __construct($_action, $_horror, $_thriller, $_fantasy, $_drama, $_comedy)
  {
      $this->action = $_action;
      $this->horror = $_horror;
      $this->thriller = $_thriller;
      $this->fantasy = $_fantasy;
      $this->drama = $_drama;
      $this->comedy = $_comedy;
  }
}