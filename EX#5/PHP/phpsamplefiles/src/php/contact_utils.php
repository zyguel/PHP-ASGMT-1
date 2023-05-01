<?php
    function locateFile(){
        return "../files/contacts.json";
    }

    function convertJSONtoArray(){
        $contacts = file_get_contents("../files/contacts.json");
        $contactArray = json_decode($contacts, true);
        return $contactArray;
    }
?>