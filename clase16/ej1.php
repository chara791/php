<?php
class client{
    var $name;
    var $age;
    var $city;
    public function __construct(){}
}
#objeto json
$client = new client();
$client ->name="pepe";
$client ->age=35;
$client ->city="San lorenzo";

$code_json = json_encode($client);
echo $code_json;
?>