<?php

//Buatlah array di dalam array kemudian dalam array lagi

$users = [
    "status" => 200,
    "result" => [
        "current_page" => 1,
        "data" => [
            [
                "id" => "9a7be3ee-f23e-46ab-bf5a-ce5cb3b093b6",
                "role_id" => "9a07b306-7485-46cf-a3bd-045bb082bb9f",
                "location_id" => "9a2f776d-f6b6-4072-813d-34a880d10de3",
                "nik" => "1234",
                "name" => "Test User",
                "email" => "test_api@demo.com",
                "phone" => "09123123123",
                "status" => 1,
                "created_at" => "2023-10-29T08:42:37.431619Z",
                "updated_at" => "2023-10-29T08:42:37.431619Z",
                "initials" => "TU",
                "supervisor_nik" => "JMP-23081337",
                "kadep_nik" => "JMP-23081337",
                "kadiv_nik" => "JMP-23081337"
            ],
            [
                "id" => "9a65abf4-07a7-4ef4-b306-f44fc3e6b821",
                "role_id" => "9a07b306-7485-46cf-a3bd-045bb082bb9f",
                "location_id" => "9a2f776d-f6b6-4072-813d-34a880d10de3",
                "nik" => "JMP-23081337",
                "name" => "Batman",
                "email" => "Batman@gmail.com",
                "phone" => "081111111111",
                "status" => 1,
                "created_at" => "2023-10-18T07:37:52.714578Z",
                "updated_at" => "2023-10-18T07:37:52.714578Z",
                "initials" => "B",
                "supervisor_nik" => null,
                "kadep_nik" => null,
                "kadiv_nik" => null
            ]
        ]
    ]
];

//Cara pendeknya

/*Foreach si $user jika keynya result kemudian 
resultnya menggandung key ['data'] maka as paksa 
sebagai $userdata*/
foreach($users['result']['data'] as $userData) {
    /* 
    kemudian foreach lagi $userdata itu sebagai $map ($key => $data)
    */
    foreach($userData as $key => $value) {
        echo "$key : $value" . PHP_EOL;
    }
    //Untuk memisahkan setiap datanya
    echo "----------------" . PHP_EOL;
}

//Cara Panjangnya
// foreach ($users as $key => $value) {
//     if ($key === "result" && is_array($value)) {
//         foreach ($value as $subKey => $subValue) {
//             if($subkKey === "data" && is_array($subValue)) {
//                 foreach($subValue as $userData) {
//                     foreach($userData as $userKey => $userValue) {
//                         echo "$userKey: $userValue" . PHP_EOL;
//                     }
//                     echo "---------" . PHP_EOL;
//                 }
//             }else {
//                 echo "$subKey: $subValue" . PHP_EOL;
//             }
//         }
//     } else {
//         echo "$key: $value" . PHP_EOL;
//     }
// }
