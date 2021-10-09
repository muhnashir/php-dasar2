<?php
function kabisat($tahun1, $tahun2){
    if($tahun1%4==0 && $tahun2%4==0){
        for ($i=$tahun1; $i<=$tahun2; $i+=4){
            if($i!=$tahun1){
                echo $i. "<br>";
            }
        }
    }else{
        echo "tahun yang anda masukkan bukan tahun kabisat";
    }
}

function palindrome($string){
    $toLower = strtoupper($string);
    $reverse = strrev($toLower);
    if($toLower == $reverse){
        return true;
    }else{
        return false;
    }

}

function reverse($kalimat){
    $pecahString = explode(" ",$kalimat);
    $i=1;
    foreach($pecahString as $p){
        $re = strrev($p);
        echo $re." ";
    }
}

function fibonaci($arr){
    $tmp=[];
    $tm;

    for($i=0; $i<count($arr)+2; $i++){
        if($i<count($arr)){
            array_push($tmp, $arr[$i]);
            echo $arr[$i]. " <== if ". "<br>";
        }elseif($i==4){
            $tm = $tmp[$i-1]+2;
            array_push($tmp, $tm);
        }
        else{
            $tm = $tmp[$i-1]+$tmp[$i-2]+$tmp[$i-3];
            array_push($tmp, $tm);
        }
    }

    return $tmp;
}

function FizzBuzz($n){
    $output=[];
    for($i=1; $i<=$n; $i++){
        if($i%3==0){
            array_push($output,"Fizz ");
        }elseif($i%5==0){
            array_push($output,"Buzz ");
        }else{
            array_push($output,$i." ");
        }
    }
    return $output; 
}



$tahun1=1900;
$tahun2=2000;
//non aktifkan komentar jika ingin memanggilnya
// echo kabisat($tahun1, $tahun2);


$string="Ibu Ratna antar ubi";
//non aktifkan komentar jika ingin memanggilnya
// echo palindrome($string);

$kalimat= "I am A Great human";
//non aktifkan komentar jika ingin memanggilnya
echo reverse($kalimat);

$arr=[15,1,3];
//non aktifkan komentar jika ingin memanggilnya
// echo implode(" ", fibonaci($arr));


$n=10;
// echo implode("", FizzBuzz($n));

?>