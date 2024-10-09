<?php
include 'Problem1.php';
class Bus extends Vehicle {
  public function seating_capacity() {
    $seating_capacity = 50;
    return $seating_capacity; 
  }
  
  public function fare() {
    $total_fare = $this->seating_capacity() * 100;
    return $total_fare + ($total_fare * 0.10);
  }
}

$bus = new Bus("Star Bus", 30, 80);
echo "The Bus Fare is: ",$bus->fare();
?>
