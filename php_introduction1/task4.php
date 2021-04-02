<?php

$data = [
    "id" => 1,
    "name" => "Leanne Graham",
    "username" => "Bret",
    "email" => "Sincere@april.biz",
    "address" => [
        "street" => "Kulas Light",
        "suite" => "Apt. 556",
        "city" => "Gwenborough",
        "zipcode" => "92998-3874",
    ],
    "phone" => "1-770-736-8031 x56442",
    "website" => "hildegard.org",
];

[
    'id' => $id,
    'name' => $name, 
    'username' => $username, 
    'email' => $email, 
    'address' => [
        'street' => $street,
        'suite' => $suite,
        'city' => $city,
        'zipcode' => $zipcode
    ], 
    'phone' => $phone,
    'website' => $website
] = $data;

$data['name'] = "Kemal reza";
$data['email'] = "kemalreza92@gmail.com";
print_r($data);
echo "<br/>";

echo $street. ", ";
echo $city;
?>