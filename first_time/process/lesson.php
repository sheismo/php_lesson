<?php
    // $names = array (
    //     "A" => "Joe",
    //     "B" => "Mak",
    //     "C" => "John"
    // );
    // echo json_encode($names);

    $students = [
        "John" => [
            "Maths" => "50",
            "Eng" => "68"
        ],
        "Joe" => [
            "Maths" => "60",
            "Eng" => "58"
        ],
        "Proctor" => [
            "Maths" => "70",
            "Eng" => "88"
        ]
    ];

    $students["Yinka"] = array(
        "Maths" => "65",
        "Eng" => "66"
    );
    
    $jsonData = json_encode($students, JSON_PRETTY_PRINT);
// print_r(json_decode($jsonData, true));

// $result = json_decode($jsonData, true);
// print_r($result["John"]);

$result = json_decode($jsonData);
print_r($result->John);
?>