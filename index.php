<?php


echo"samer";



echo "<h1> sameeee </h1>";




// coment



// $username= "hadeer";
// echo "hello".$username;





// if($username=="hadeer"){

//     echo "success";
// }

// // another way to write shorten if

// $test=($username=="hadeer")?"<br>hello hadeer" : "<br>getout";




// echo$test;
   



// index array

// $infos=["1", "ali","ali@gmail.com"];

// // for loop
// for ($i=0;$i<count($infos);$i++){
//     echo"<br>.$infos[$i]";
// }

//associative array 
//key=>value
$infos=[


"id"=>"1",
"username"=>"ali",
"email"=>"ali@gmail.com"
];


//for each....loop
foreach($infos as $info){


    echo"$info";
}




echo"<hr>";

// function
// $username="sara";
function sayhello(){
    echo"username";
}
sayhello();

echo"<hr>";







// array of array

$users=[

[

    "id"=>"1",
    "username"=>"ali",
    "email"=>"ali@gmail.com"  
],
[
    "id"=>"1",
"username"=>"ali",
"email"=>"ali@gmail.com"
]

];

// print_r($users);
echo $users[0]['email'];

















?>











