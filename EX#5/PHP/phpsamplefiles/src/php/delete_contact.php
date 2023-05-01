<?php
    include_once("contact_utils.php");

    $status = 400;
    $message = "";
    $file_name = locateFile();

    $index = trim($_REQUEST['index']);
    
    $contactArray = convertJSONtoArray();
    array_splice($contactArray["contacts"], $index, 1);
    file_put_contents($file_name, json_encode($contactArray));

    $status = 200;
    $message = "Contact deleted from file.";

    $myObj = array(
        'status' => $status,
        'message' => $message 
    );
    echo json_encode($myObj, JSON_FORCE_OBJECT);
?>