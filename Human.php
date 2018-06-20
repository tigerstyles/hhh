<?php
class Human {

  private $gender;
  private $name;
  private $bodyparts;
  private $status;

  public function __birth($gender, $bodyparts, $name) {
    $this->$gender = $gender;
    $this->bodyparts = $bodyparts;
    $this->$name = $name;
    $this->status = 'alive';
  }

  public function breathe() {
    // breath air
  }

  public function eat() {
    // eat something
  }

  public function sleep() {
    // go to sleep
  }

  public function do() {
    // do something
  }

  public function think() {
    // think of/about something
  }

  public function feel() {
    // feel something
  }

  public function speak() {
    // say something
  }

  public function die() {
    $this->status = 'dead';
  }

}
