<?php

    function allElectronic($arr, $string){
        $tmp=[];
        if($string=="electronic"){
            for($i = 0; $i<count($arr); $i++){
                if($arr[$i]["type"]==$string){             
                  array_push($tmp, $arr[$i]["name"]);
                }           
            }
        }elseif($string=="furniture"){
            for($i = 0; $i<count($arr); $i++){
                if($arr[$i]["type"]==$string){             
                  array_push($tmp, $arr[$i]);
                }           
            }
        }
        
        echo json_encode($tmp);
    }

    function color($arr, $string){
        $tmp=[];
        for($i = 0; $i<count($arr); $i++){
                for($j=0; $j<count($arr[$i]["tags"]); $j++){
                    if($arr[$i]["tags"][$j]==$string){             
                        array_push($tmp, $arr[$i]);
                    }
                }           
        }
        if($tmp){
            echo json_encode($tmp);
        }else{
            echo "not found";
        }
    }

    function finById($arr, $string){
        $tmp=[];
        for($i = 0; $i<count($arr); $i++){
            if($arr[$i]["inventory_id"]==$string){             
                array_push($tmp, $arr[$i]);
            }        
        }
        if($tmp){
            echo json_encode($tmp);
        }else{
            echo "not found";
        }
    }

    function findByDate($arr, $date){
        $tanggal = date("Y-m-d", strtotime($date));
        $format = strtotime($tanggal);
        echo $format;
        die;
        $tmp=[];
        for($i = 0; $i<count($arr); $i++){
            if($arr[$i]["purchased_at"]==$format){             
                array_push($tmp, $arr[$i]);
            }        
        }
        if($tmp){
            echo json_encode($tmp);
        }else{
            echo "not found";
        }
        
    }

    
    $str = file_get_contents('data.json');
    $json_arr = json_decode($str, true);

    // Find all electronic devices.
    echo allElectronic($json_arr, "electronic");
    echo "<br>";
    // Find all the furniture.
    echo allElectronic($json_arr, "furniture");
    echo "<br>";
    // Find all items with brown color.
    echo color($json_arr, "brown");
    echo "<br>";
    // Find items in the Meeting Room.
    echo finById($json_arr, "2932");
    echo "<br>";
    // Find all items were purchased on 16 Januari 2020.
    echo findByDate($json_arr, "10 december 2021");
    echo "<br>";



?>