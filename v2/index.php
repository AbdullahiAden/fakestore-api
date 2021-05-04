<?php

//  Ange lämpliga HTTP headers
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header("Referrer-Policy: no-referrer");


//  Skapa arrayer


$id = [
    "bag" => 1,
    "shirt" => 2,
    "trouser" => 3,
    "shorts" => 4,
    "tie" => 5,
    "t-shirt" => 6,
    "shoes" => 7,
    "sweater" => 8,
    "jacket" => 9,
    "coat" => 10,
    "socks" => 11,
    "tracksuit" => 12,
    "dress" => 13,
    "blouse" => 14,
    "nighty" => 15,
    "bikini" => 16,
    "boots" => 17,
    "cap" => 18,
    "polo shirt" => 19,
    "shawl" => 20,
];

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


$description = [
    "bag" =>  "description for bag",
    "shirt" => "description for  shirt",
    "trouser" => "description for  trouser",
    "shorts" => "description for  shorts",
    "tie" => "description for  tie",
    "t-shirt" => "description for  t-shirt",
    "shoes" => "description for  shoes",
    "sweater" => "description for  sweater",
    "jacket" => "description for  jacket",
    "coat" => "description for  coat",
    "socks" => "description for  socks",
    "tracksuit" => "description for  tracksuit",
    "dress" => "description for  dress",
    "blouse" => "description for  blouse",
    "nighty" => "description for  nighty",
    "bikini" => "description for  bikini",
    "boots" => "description for  boots",
    "cap" => "description for  cap",
    "polo shirt" => " description for  polo shirt",
    "shawl" => " description for  shawl"

];

$image = [

    "bag" => "https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcRnTv_Mm0r42u_nXk_H5f-qvmyBBWfxERMknwwMsejstzSGAxzOF6RCmCp0ZGf0pOaTLyP9rBntFYU&usqp=CAc",
    "shirt" => "https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcQ4IDAR6sqFGWGgmoJfToNBVQTWfsnLqPM3rg6xOScKPn6bZzredEXUw4IOhhTDrZjyxGoAtrlNvw&usqp=CAc",
    "trouser" => "https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcTGtOfVrK3TFsyK2t_ileBAlvAsNDih_XxRsZJt5a1lteCqgbURr52TIUDNh8vg2dOrJTkSB-_ZfXmp&usqp=CAc",
    "shorts" => "https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg",
    "tie" => "https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg",
    "t-shirt" => "https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg",
    "shoes" => "https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg",
    "sweater" => "https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg",
    "jacket" => "https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg",
    "coat" => "https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg",
    "socks" => "https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg",
    "tracksuit" => "https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg",
    "dress" => "https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg",
    "blouse" => "blouse https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg",
    "nighty" => "nighty https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg",
    "bikini" => " biki https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg",
    "boots" => "boot https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg",
    "cap" => " cap  https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg",
    "polo shirt" => " polo sh https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg",
    "shawl" => "shw https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg",

];

$price = [
    "bag" => 109.95,
    "shirt" => 19.95,
    "trouser" => 10.95,
    "shorts" => 102.95,
    "tie" => 120.95,
    "t-shirt" => 119.95,
    "shoes" => 104.95,
    "sweater" => 29.95,
    "jacket" => 39.95,
    "coat" => 10.95,
    "socks" => 11.95,
    "tracksuit" => 13.95,
    "dress" => 16.95,
    "blouse" => 15.9,
    "nighty" => 18.9,
    "bikini" => 34.5,
    "boots" => 12.5,
    "cap" => 9.95,
    "polo shirt" => 89.95,
    "shawl" => 19.5,

];

$category = [
    "bag" => "women",
    "shirt" => "men",
    "trouser" => "men",
    "shorts" => "men",
    "tie" => "men",
    "t-shirt" => "women",
    "shoes" => "women",
    "sweater" => "women",
    "jacket" => "women",
    "coat" => "women",
    "socks" => "women",
    "tracksuit" => "women",
    "dress" => "women",
    "blouse" => "women",
    "nighty" => "women",
    "bikini" => "women",
    "boots" => "men",
    "cap" => "men",
    "polo shirt" => "men",
    "shawl" => "women"
];



// spara  i en ny array
$products = array();

$show = $_GET['show'] ?? 20;
$categoryFilter = $_GET['category'] ? $_GET['category'] : false;

if (!isset($_GET['show']) && !isset($_GET['category'])) {
    for ($i = 0; $i < 20; $i++) {

        $tit = $title[$i];
        $ids = $id[$tit];
        $desc = $description[$tit];
        $img = $image[$tit];
        $pri = $price[$tit];
        $categ = $category[$tit];

        $product = array(
            "id" => $ids,
            "title" => $tit,
            "description" => $desc,
            "image" => $img,
            "price" => $pri,
            "category" => $categ,
        );
        array_push($products, $product);
    }
}



// * if both show and categoryFilter are wrong

if ($show && $categoryFilter) {

    if (($show <= 0 || $show > 20) && ($categoryFilter !== "men" || $categoryFilter !== "women" || $categoryFilter !== "jewelery")) {
        $product = array(
            "Show" => "Show must be between 1 and 20",
        );
        array_push($products, $product);
    }
}
// * only if show is given 
elseif (isset($_GET['show'])) {

    if ($show <= 0 or $show > 20) {
        $product = array(
            "Show" => "Show must be between 1 and 20",
        );
        array_push($products, $product);
    } else {


        for ($i = 0; $i < $show; $i++) {


            $tit = $title[rand(0, count($title) - 1)];
            $ids = $id[$tit];
            $desc = $description[$tit];
            $img = $image[$tit];
            $pri = $price[$tit];
            $categ = $category[$tit];

            $product = array(
                "id" => $ids,
                "title" => $tit,
                "description" => $desc,
                "image" => $img,
                "price" => $pri,
                "category" => $categ,
            );

            array_push($products, $product);
        }
    }
}

// * category filter

if ($categoryFilter) {
    if (!in_array($categoryFilter, $category)) {

        $product = array(
            "Category" => "Category not found"
        );
        array_push($products, $product);
    }


    // * for men  
    elseif ($categoryFilter === "men") {


        for ($i = 0; $i < $show; $i++) {

            $tit = $title[$i];
            $ids = $id[$tit];
            $desc = $description[$tit];
            $img = $image[$tit];
            $pri = $price[$tit];
            $categ = $category[$tit];

            if ($categ === "men") {
                $product = array(
                    "id" => $ids,
                    "title" => $tit,
                    "description" => $desc,
                    "image" => $img,
                    "price" => $pri,
                    "category" => $categ,
                );

                array_push($products, $product);
                shuffle($products);
            }
        }
    }


    // * for women 
    if ($categoryFilter === "women") {

        for ($i = 0; $i < $show; $i++) {

            $tit = $title[$i];
            $ids = $id[$tit];
            $desc = $description[$tit];
            $img = $image[$tit];
            $pri = $price[$tit];
            $categ = $category[$tit];

            if ($categ === "women") {
                $product = array(
                    "id" => $ids,
                    "title" => $tit,
                    "description" => $desc,
                    "image" => $img,
                    "price" => $pri,
                    "category" => $categ,
                );

                array_push($products, $product);
                shuffle($products);
            }
        }
    }
}



// ***********************

// * what is not working is , cannot show the amount of show if 
// * it is defined with  category, INSTEAD IT SHOWS ALL ITEMS UP UNTILL SHOW  
// todo -- randoms not unique



// Konvertera PHP-arrayen ($products) till JSON

$json = json_encode($products, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
// Skicka JSON till klienten
echo $json;
