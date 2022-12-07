
<?php 

class Movie 
{
  public $title;
  public $actorOne;
  public $actorTwo;
  public $movieDirector;
  public $year;
  public $poster;
  public $genre;

  /**
   * @param String $title
   * @param String $actorOne
   * @param String $actorTwo
   * @param String $movieDirector
   * @param String $year
   * @param String $poster
   * @param String $genre
   */

  public function __construct($_title, $_actorOne, $_actorTwo, $_movieDirector, $_year, $_poster, $_genre){
    $this->title = $_title;
    $this->actorOne = $_actorOne;
    $this->actorTwo = $_actorTwo;
    $this->movieDirector = $_movieDirector;
    $this->year = $_year;
    $this->poster = $_poster;
    $this->genre = $_genre;
  }

  public function setPoster($_poster)
  {
    $this->poster = $_poster;
    $placeholder = 'https://t4.ftcdn.net/jpg/05/07/58/41/360_F_507584110_KNIfe7d3hUAEpraq10J7MCPmtny8EH7A.jpg';
    if ($this->poster) {
      return $this->poster;
    }
    return $placeholder;
  }
}


