<?php

//  Ange lämpliga HTTP headers
// Läs mer här: https://stackoverflow.com/questions/10636611/how-does-access-control-allow-origin-header-work
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header("Referrer-Policy: no-referrer");



// Skapa arrayer
$id = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];
$title = [
    "bag",
    "shirt",
    "trouser",
    "shorts",
    "tie",
    "t-shirt",
    "shoes",
    "sweater",
    "jacket",
    "coat",
    "socks",
    "tracksuit",
    "dress",
    "blouse",
    "nighty",
    "bikini",
    "boots",
    "cap",
    "polo shirt",
    "shawl"
];
$price = [
    109.95,
    109.95,
    109.95,
    109.95,
    109.95,
    109.95,
    109.95,
    109.95,
    109.95,
    109.95,
    109.95,
    109.95,
    109.95,
    109.95,
    109.95,
    109.95,
    109.95,
    109.95,
    109.95,
    23
];
$description = [
    "something",
    "THE ORIGINAL  black",
    "THE ORIGINAL - clothing - b",
    "THE ORIGINAL  bas - black",
    "THE ORIGINAL - T-shirt  - black",
    "THE ORIGINAL - T-shirt - bas - black",
    "Various versions have evolved over the years,",
    "humour and the like",
    "opposed to using 'Content here,",
    "readable content of a page",
    " containing",
    "best line ",
    "simplicity original",
    "Inspirerad av workwear. ",
    "something else ",
    "how come you wear",
    "try these",
    "you should",
    "as he said nice",
    "clothing line - b"
];
$category = [
    "women",
    "men",
    "men",
    "men",
    "men",
    "women",
    "women",
    "women",
    "women",
    "women",
    "women",
    "women",
    "women",
    "women",
    "women",
    "women",
    "men",
    "men",
    "men",
    "women",
];
$image = [
    "https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg",
    "https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg",
    "https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg",
    "https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg",
    "https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg",
    "https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg",
    "https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg",
    "https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg",
    "https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg",
    "https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg",
    "https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg",
    "https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg",
    "https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg",
    "https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg",
    "https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg",
    "https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg",
    "https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg",
    "https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg",
    "https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg",
    "https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg"
];


$products = array();

for ($i = 0; $i < 20; $i++) {
    $product = array(
        "id" => $id[$i],
        "title" => $title[$i],
        "price" => $price[$i],
        "description" => $description[$i],
        "category" => $category[$i],
        "image" => $image[$i],

    );
    array_push($products, $product);
}

// Konvertera PHP-arrayen ($names) till JSON
$json = json_encode($products, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

// Skicka JSON till klienten
echo $json;
