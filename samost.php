
<?php
//Тележкин

$arrRange = range(-50,50,8);

shuffle($arrRange);
echo '<pre>';
print_r($arrRange);
echo '</pre>';

echo '<pre>';
print_r(implode("**", $arrRange, ));
echo '</pre>';

$arrRangeNech = array_filter($arrRange, fn ($item) => !($item%2 == 0) );

echo '<pre>';
print_r($arrRangeNech);
print_r(count($arrRangeNech));
echo '</pre>';

for($i = 0; $i< count($arrRange); $i++){
    if($arrRange[$i] < 0){
        $arrRange[$i]  = $arrRange[$i]  * -1;
    }
}

echo '<pre>';
print_r($arrRange);
echo '</pre>';



$arrRandom = [];
for($i=0; $i<20; $i++){
    $arrRandom[]= mt_rand(-5,10);
}

echo '<pre>';
print_r($arrRandom);
echo '</pre>';

$arrRandomUnc = array_unique($arrRandom);
echo '<pre>';
print_r(count($arrRandomUnc));
echo '</pre>';

echo '<pre>';
print_r(array_sum($arrRandom));
echo '</pre>';

$arrRangeMult = array_reduce($arrRange, fn ($carry,$item) => $item%3==0?$carry*=$item:$carry ,1);
echo '<pre>';
print_r($arrRangeMult);
echo '</pre>';

$arrSum1 = $arrRange + $arrRandom;

$arrSum2 = array_merge($arrRange, $arrRandom);

array_slice($arrRandom, 1,3);
echo '<pre>';
print_r($arrRandom);
echo '</pre>';

$arrRandomSr = array_sum($arrRandom)/ count($arrRandom);
$arrRangeMenSr = array_filter($arrRandom, fn ($item) => $item <= $arrRandomSr );

echo '<pre>';
print_r($arrRandomSr. "<br>");
print_r($arrRangeMenSr);
echo '</pre>';

$arrRandom[] = 1000;
array_push($arrRandom, 1000) ;
echo '<pre>';
print_r($arrRandom);
echo '</pre>';

$apple = "Черешня";
$graple = "Виноград";
$strawberry = "Земляника";
$pear = "Груша";

$arrNew = compact("apple", "graple", "strawberry", "pear");
echo '<pre>';
print_r($arrNew);
echo '</pre>';
$arrNew2 = ["apple"=>$apple,"graple"=>$graple,"strawberry"=>$strawberry,"pear"=>$pear,];
echo '<pre>';
print_r($arrNew2);
echo '</pre>';

$arr = [
    [
        "street" => "Гагарина", 
        "house" => 7, 
        "flat" => 303
    ],
    [
        "street" => "Елькина", 
        "house" => 12, 
        "flat" => 12
    ],
    [
        "street" => "Доватора", 
        "house" => 113, 
        "flat" => 24
    ],
];
usort($arr, "sortDom");

function sortDom($a, $b) {
    if($a["house"] > $b["house"]) {return 1;}
    if($a["house"] == $b["house"]) {return 0;}
    if($a["house"] < $b["house"]){ return -1;}
}

echo '<pre>';
print_r($arr);
echo '</pre>';


