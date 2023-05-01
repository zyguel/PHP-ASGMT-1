<?php
    $status = 400;
    $data = "Error";

    $name1 = trim($_REQUEST['name1']);
    $name2 = trim($_REQUEST['name2']);

    /* START FLAMES CODE */
    // Remove all common characters from both names
    $uniqueChars1 = str_replace(str_split($name2), '', $name1);
    $uniqueChars2 = str_replace(str_split($name1), '', $name2);

    // Count all the remaining characters from both names
    $count = strlen($uniqueChars1) + strlen($uniqueChars2);

    // FLAMES array
    $flames = array("Friends", "Lovers", "Admirers", "Married", "Enemies", "Siblings");

    // Iterate through the FLAMES array
    $n = 0;
    while (count($flames) > 1) {
        $index = ($n + $count - 1) % count($flames);
        array_splice($flames, $index, 1);
        $n = $index;
    }

    // Determine the relationship
    switch ($flames[0]) {
        case "Friends":
            $data = "$name1 and $name2 are just friends";
            $status = 200;
            break;
        case "Lovers":
            $data = "$name1 and $name2 are in love";
            $status = 200;
            break;
        case "Admirers":
            $data = "$name1 admires $name2";
            $status = 200;
            break;
        case "Married":
            $data = "$name1 and $name2 are married";
            $status = 200;
            break;
        case "Enemies":
            $data = "$name1 and $name2 are enemies";
            $status = 200;
            break;
        case "Siblings":
            $data = "$name1 and $name2 are siblings";
            $status = 200;
            break;
    }
    /* END FLAMES CODE */ 

    $myObj = array(
        'status' => $status,
        'data' => $data,
    );

    // Encode the response as JSON
    $response = json_encode($myObj);

    // Send the response back to the client
    echo $response;
?>
