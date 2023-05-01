<?php
    include_once("contact_utils.php");

    $status = 400;
    $data = []; 
    $message = "";
    $file_name = locateFile();

    if(file_exists($file_name)){
        $message = "File exists.";
        $status = 200;
        $val = file_get_contents($file_name);
        if($val == ""){
            $data = [];
            $message = "No contact/s.";
        }else{
            $data = $val;
            $message = "Contact/s retrieved.";
        }
    }else{
        $message = "File does not exists.";
        $fh = fopen($file_name, 'w');
        $array = array("contacts" => (array) null);
        file_put_contents($file_name, json_encode($array));
        fclose($fh);
    }
    
    $myObj = array(
        'status' => $status,
        'data' => $data,
        'message' => $message
    );
    echo json_encode($myObj, JSON_FORCE_OBJECT);
?>