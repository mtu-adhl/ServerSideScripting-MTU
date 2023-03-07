<?php
$jsonArray = [
    [
        "id" => "287947",
        "title" => "Shazam!",
        "poster" => "https://image.tmdb.org/t/p/w500/xnopI5Xtky18MPhK40cZAGAOVeV.jpg",
        "overview" => "A boy is given the ability to become an adult superhero in times of need with a single magic word.",
        "release_date" => "1553299200",
        "genres"=> ["Action", "Comedy", "Fantasy"]
    ],
    [
        "id" => "299537",
        "title" => "Captain Marvel",
        "poster" => "https://image.tmdb.org/t/p/w500/AtsgWhDnHTq68L0lLsUrCnM7TjG.jpg",
        "overview" => "The story follows Carol Danvers as she becomes one of the universe’s most powerful heroes when Earth is caught in the middle of a galactic war between two alien races. Set in the 1990s, Captain Marvel is an all-new adventure from a previously unseen period in the history of the Marvel Cinematic Universe.",
        "release_date" => "1551830400",
        "genres"=> ["Action", "Adventure", "Science Fiction"]
    ]
];
// compact format
$compactJsonString = json_encode($jsonArray);
echo $compactJsonString.PHP_EOL;
// pretty human-readable format
$prettyJsonString = json_encode($jsonArray, JSON_PRETTY_PRINT);
//echo $prettyJsonString.PHP_EOL;
//echo $prettyJsonString  ;

$jsonData = json_decode($prettyJsonString,true);
//var_dump($jsonData);