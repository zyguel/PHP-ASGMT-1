<?php 
    $status = 400;
    $data = "Error"; 

    $name1 = str_replace(" ","", strtolower($_REQUEST['name1']));
    $name2 = str_replace(" ","", strtolower($_REQUEST['name2']));

    /* START FLAMES CODE */
    $flames = array("Friends","Lovers","Admirers","Married","Enemies","Siblings");
    $total = 0;
    $remNamel = 0;
    $remName2 = 0;

    for($i = 0; $i < strlen($name1); $i++){
        if(strpos("$name2","$name1[$i]") !== false){
            $temp2 = str_replace("$name1[$i]","~", $name2);
            $name2 = $temp2;
            $temp1 = str_replace("$name1[$i]","~", $name1);
            $name1 = $temp1;
        }
    }

    for($i = 0; $i < strlen($name1); $i++){
        if($name1[$i] != "~"){
            $remNamel++;
        }
    }

    for($i = 0; $i < strlen($name2); $i++){
        if($name2[$i] != "~"){
            $remName2++;
        }
    }
    
    $total = $remNamel + $remName2;
    $flamesIndex = $total % 6;

    $status = 200;
    $data = $flames[$flamesIndex - 1];
    /* END FLAMES CODE */

    $myObj = array(
        'status' => $status,
        'data' => $data,
    );
    echo json_encode($myObj, JSON_FORCE_OBJECT);
?>