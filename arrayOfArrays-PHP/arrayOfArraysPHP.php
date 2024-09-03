<?php
//Assoc array
$listOfCars = array();
$car1 = array("id"=>1,"name"=>"AUDI","country"=>"D");
$car2 = array("id"=>2,"name"=>"AUDI","country"=>"H");
$car3 = array("id"=>3,"name"=>"BMW","country"=>"D");
$listOfCars["avtosalon"][]=$car1;
$listOfCars["avtosalon"][]=$car2;
$listOfCars["avtosalon"][]=$car3;
var_dump($listOfCars);
echo "<hr>";

$listOfCars2=array(
    array("id"=>1,"name"=>"AUDI","country"=>"D"),
    array("id"=>2,"name"=>"AUDI","country"=>"H"),
    array("id"=>3,"name"=>"BMW","country"=>"D")
);
$data=array();
var_dump($listOfCars2);
foreach($listOfCars2 as $row){
    echo $row["id"];
        $data[]=array("id"=>$row["id"],"name"=>$row["name"]);
}
var_dump($data);
?>