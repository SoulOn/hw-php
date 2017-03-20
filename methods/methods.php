<?php
class CarClubMembers{


  public $name;
  private $email;
  private $phone;
  public $manufacturer;
  public $model;
  public $color;
  public $years;


  public function __construct($name, $email, $phone, $manufacturer, $model,  $color, $years) {
    $this->name = $name;
    $this->email = $email;
    $this->phone = $phone;
    $this->manufacturer = $manufacturer;
    $this->model = $model;
    $this->color = $color;
    $this->years = $years;
  }

  public function __destruct(){
    echo "<h2>__destruct </h2>";
    echo "Destroying - " . __CLASS__ . "";
  }


  protected function carModel(){
    echo " ". $this->manufacturer ." ". $this->model."<br/>";
  }

  protected function carInfo(){
    echo "Called the best car";
  }

  public function __call($name, $argument){
    return call_user_func_array(array($this, $name), $argument);
  }

  public static function __callStatic($name, $argument){
    return call_user_func_array(array(__CLASS__, $name), $argument);
  }

  public function __toString(){
    return "Thank you " . $this->name. "! Your registration has been successfully copmleted. ";
  }

  public function __set($name, $value) {
    echo "Your email from ". $this->$name ." has been changed to <strong>". $value . "</strong><br/>";
  }

  public function __get($name){
    echo "Your ". $name." is <strong>". $this->$name . "</strong><br/>";
  }

  public function __isset($name){
    echo "Is ". $name ." set? ". (isset($this->$name) ? "Y" : "N") ."<br/>";
  }


  public function __unset($name){
    echo "Unsetting ". $name."<br/>";
    unset($this->$name);
  }

  public function __invoke($value){
    echo "Calling function <b>". $value. "</b><br/>";
  }

  public function __debugInfo(){
    return ['name' => $this->name];
  }

}
