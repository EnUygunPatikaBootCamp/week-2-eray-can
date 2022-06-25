<?php
class Vehicle {
  public $number_plate; #Plaka no
  public $brand; #Marka
  public $model; #Model
  public $wheelnumber; #Tekerlek sayısı
  public $wingspan; #Kanat açıklığı

  public function set_number_plate($number_plate){
      $this->number_plate = $number_plate;
  }

  public function get_number_plate(): string
  {
      return $this->number_plate;
  }

  public function set_brand($brand){
      $this->brand = $brand;
  }

  public function get_brand(): string
  {
       return $this->brand;
  }

  public function set_model($model){
        $this->model = $model;
  }

    public function get_model(): string
    {
        return $this->model;
  }
  public function set_wheelnumber($wheelnumber){
        $this->wheelnumber = $wheelnumber;
  }

  public function get_wheelnumber(): string
  {
        return $this->wheelnumber;
  }
  public function set_wingspan($wingspan){
        $this->wingspan = $wingspan;
  }

  public function get_wingspan(): string
  {
        return $this->wingspan;
  }

}

class Car extends Vehicle{
    public function car_message(){
        echo "Plaka no : " . parent::get_number_plate() ."<br>" . "Marka : ". parent::get_brand() . "<br>". "Model : " . parent::get_model()."<br>". "Tekerlek sayısı : ". parent::get_wheelnumber()."<br><br>";
    }
}

class Motorcycle extends Vehicle{
    public function motorcycle_message(){
        echo "Motor Plaka no : " . parent::get_number_plate() ."<br>" . "Marka : ". parent::get_brand() . "<br>". "Model : " . parent::get_model()."<br>". "Tekerlek sayısı : ". parent::get_wheelnumber()."<br><br>";
    }
}

class Aeroplane extends Vehicle {
    public function aeroplane_message(){
        echo "Marka : " . parent::get_brand()."<br>"."Model : ". parent::get_model()."<br>"."Kanat açıklığı : ".parent::get_wingspan();
    }
}
$Car = new Car();
$Car->set_number_plate("06 ARAC 06");
$Car->set_brand("Mercedes");
$Car->set_model("C180");
$Car->set_wheelnumber("4");
$Car->car_message();


$Motorcycle = new Motorcycle();
$Motorcycle->set_number_plate("06 MOTOR 06");
$Motorcycle->set_brand("Honda");
$Motorcycle->set_model("Forza 750");
$Motorcycle->set_wheelnumber("2");
$Motorcycle->Motorcycle_message();


$Aeroplane = new Aeroplane();
$Aeroplane->set_brand("Airbus");
$Aeroplane->set_model("model");
$Aeroplane->set_wingspan("80 M");
$Aeroplane->aeroplane_message();