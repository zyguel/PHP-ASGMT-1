<?php
    include_once("contact_utils.php");

    $status = 400;
    $message = "";
    $file_name = locateFile();

    $lname = trim($_REQUEST['lname']);
    $fname = trim($_REQUEST['fname']);
    $emailAdd = trim($_REQUEST['emailAdd']);
    $contactNum = trim($_REQUEST['contactNum']);

    $newContact = array("last_name" => $lname,
                "first_name" => $fname,
                "email" => $emailAdd,
                "contact_num" => $contactNum);

    $contactArray = convertJSONtoArray();
    array_push($contactArray["contacts"], $newContact);
    file_put_contents($file_name, json_encode($contactArray));

    $status = 200;
    $message = "Contact added to file.";

    $myObj = array(
        'status' => $status,
        'message' => $message 
    );
    echo json_encode($myObj, JSON_FORCE_OBJECT);
?>