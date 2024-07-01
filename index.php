
<?php 
 
 $amount = 1200;

 if ($amount == "600"){
    echo "coffe";
 }else if ($amount == "900"){
   echo "coffe pan";
 }else if ($amount =="1200"){
    echo "dalevary free";
 }
 else {
 echo "no offer";
 }




$start_leap_year = 1971;
$currect_leap_year = 2024;

for ($i = $start_leap_year; $i <= $currect_leap_year; $i++ ){
    if ($i % 4 !== 0){
        echo $i .' ';
    }
}


$nmaes = ['rakib' => 18,'akash' => 20, 'sagor'=> 22, ['bororia','momahadpur','magura']];
echo $names[2];[2];