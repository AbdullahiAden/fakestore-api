<?php

// Steg 1 - Ange lämpliga HTTP headers
// Läs mer här: https://stackoverflow.com/questions/10636611/how-does-access-control-allow-origin-header-work
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header("Referrer-Policy: no-referrer");



// Steg 2 - Skapa arrayer
$id = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];
$title = [
    "bag",
    "shirt",
    "trouser",
    "shorts",
    "tie",
    "t-shirt",
    "shoes",
    "blouse",
    "blouse",
    "blouse",
    "blouse",
    "blouse",
    "blouse",
    "blouse",
    "blouse",
    "blouse",
    "blouse",
    "shawl",
    "shawl",
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
    "something",
    "something",
    "something",
    "something",
    "something",
    "something",
    "something",
    "something",
    "something",
    "something",
    "something",
    "something",
    "something",
    "something",
    "something",
    "something",
    "something",
    "something",
    "something"
];
$category = [
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
    "women",
    "women",
    "men",
    "men",
    "men",
    "men",
    "men",
    "men",
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


// Steg 3 - Skapa 10 namn och spara dessa i en ny array
$products = array();
$length = count($products);


$show = $_GET['show'] ?? 20;
// $category = $_GET['category'];

if (!isset($_GET['show']) and !isset($_GET['category'])) {
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
} elseif (isset($_GET['show'])) {
    if ($show <= 0 or $show > 20) {
        $product = array(
            "Show" => "Show must be between 1 and 20"

        );
        array_push($products, $product);
    } else {
        for ($i = 0; $i < $show; $i++) {

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
    }
}
if (isset($_GET['category'])) {
    if ($category != "men" or $category != "women" or $category != "jewelery") {
        $product = array(
            "Category" => "Category not found"

        );
        array_push($products, $product);
    }
}





// print_r($names); die();

// Steg 4 – Konvertera PHP-arrayen ($names) till JSON
$json = json_encode($products, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

// json_encode — Returns the JSON representation of a value // http://php.net/manual/en/function.json-encode.php

// Steg 5 – Skicka JSON till klienten
echo $json;
