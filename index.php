<?php
    // a comment
    /**
     * 
     */
    $title = 'Learn PHP From Scratch';
    $heading = 'Welcome To The Course';
    $body = 'In this course, you will learn the fundamentals of the PHP language';

    // String
    // $name = 'Brad Traversy' ;
    // $name2 = 'John Doe';

    // var_dump($name);
    // echo '<br />';
    // echo getType($name2);

    // //Integer
    // $age = 35;
    // echo '<br />';
    // var_dump($age);

    // // Float 
    // $rating = 4.5;
    // var_dump($rating);
    // echo '<br />';

    // //Boolean
    // $isLoaded = true;
    // var_dump($isLoaded);
    // echo '<br />';

    // // Array
    // $friends = ['John',"Jack",'Jane'];
    // var_dump($friends);
    // echo '<br />',

    // // Objects
    // $person = new stdClass();
    // var_dump($person);
    // echo '<br />';

    // //Null
    // $car = null;
    // var_dump($car);
    // echo '<br />';

    //Resource
    // $file = fopen('sample.txt', 'r');
    // var_dump($file);

    $firstName = 'John';
    $lastName = 'Doe';
    $fullName = $firstName . " " .$lastName;

    ?>

    <!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <title><?= $title ?></title>
    </head>
    
    <body class="bg-gray-100">
        <header class="bg-blue-500 text-white p-4">
            <div class="container mx-auto">
                <h1 class="text-3xl font-semibold"><?=$title?></h1>
            </div>
        </header>
        <div class="container mx-auto p-4 mt-4">
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-2xl font-semibold mb-4"><?=$heading?></h2>
                <p>In this course, you will learn the fundamentals of the PHP language</p>
                <?= 'Hello my name is ' . $fullName . '<br/>' ?>
                <?= "Hello my name is $fullName" ?>
                <?= 'Hello my name is \'John\'' ?>
            </div>
        </div>
    </body>
    
    </html>