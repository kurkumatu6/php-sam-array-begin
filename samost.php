
<?php
//Тележкин
//1.	Создайте массив arrRange и заполните его числами в промежутке [-50; 50] с шагом=8.
//Перемешайте элементы этого массива

$arrRange = range(-50,50,8);

shuffle($arrRange);
echo '<pre>';
print_r($arrRange);
echo '</pre>';

//2.	Выведите элементы этого массива в строку через 
//« ** ».

echo '<pre>';
print_r(implode("**", $arrRange, ));
echo '</pre>';
//3.	Удалите четные элементы этого массива, определите количество оставшихся
$arrRangeNech = array_filter($arrRange, fn ($item) => !($item%2 == 0) );

echo '<pre>';
print_r($arrRangeNech);
print_r(count($arrRangeNech));
echo '</pre>';
//4.	Замените все отрицательные значения положительными
for($i = 0; $i< count($arrRange); $i++){
    if($arrRange[$i] < 0){
        $arrRange[$i]  = $arrRange[$i]  * -1;
    }
}

echo '<pre>';
print_r($arrRange);
echo '</pre>';


//5.	Создайте новый массив arrRandom и заполните его на 20 элементов случайными числами в промежутке [-5; 10].
$arrRandom = [];
for($i=0; $i<20; $i++){
    $arrRandom[]= mt_rand(-5,10);
}

echo '<pre>';
print_r($arrRandom);
echo '</pre>';
//6.	Определите количество значений в массиве arrRandom (количество повторений) 
$arrRandomUnc = array_unique($arrRandom);
echo '<pre>';
print_r(count($arrRandomUnc));
echo '</pre>';
//пределите сумму элементов массива arrRandom
echo '<pre>';
print_r(array_sum($arrRandom));
echo '</pre>';
//8.	Определите произведение элементов массива arrange, кратных 3
$arrRangeMult = array_reduce($arrRange, fn ($carry,$item) => $item%3==0?$carry*=$item:$carry ,1);
echo '<pre>';
print_r($arrRangeMult);
echo '</pre>';
//9.	Объедините массивы arrRange и arrRandom двумя способами
$arrSum1 = $arrRange + $arrRandom;

$arrSum2 = array_merge($arrRange, $arrRandom);
//10.	В массиве arrRandom удалите 2, 3 и 4 элементы
array_splice($arrRandom, 2,3);
echo '<pre>';
print_r($arrRandom);
echo '</pre>';
//11.	В массиве arrRandom определите количество элементов, не превышающих его среднее значение
$arrRandomSr = array_sum($arrRandom)/ count($arrRandom);
$arrRangeMenSr = array_filter($arrRandom, fn ($item) => $item <= $arrRandomSr );

echo '<pre>';
print_r($arrRandomSr. "<br>");
print_r($arrRangeMenSr);
echo '</pre>';
//12.	Добавьте в конец массива arrRandom элемент=1000 (2 способа)
$arrRandom[] = 1000;
array_push($arrRandom, 1000) ;
echo '<pre>';
print_r($arrRandom);
echo '</pre>';

$apple = "Черешня";
$graple = "Виноград";
$strawberry = "Земляника";
$pear = "Груша";
//14.	Сформируйте массив из переменных, представленных ниже
$arrNew = compact("apple", "graple", "strawberry", "pear");
echo '<pre>';
print_r($arrNew);
echo '</pre>';
$arrNew2 = ["apple"=>$apple,"graple"=>$graple,"strawberry"=>$strawberry,"pear"=>$pear,];
echo '<pre>';
print_r($arrNew2);
echo '</pre>';
//Выполните сортировку элементов массива по номеру дома в порядке возрастания.
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


