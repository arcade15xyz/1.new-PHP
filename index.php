<!-- <?php
    // a comment
    /**
     * 
     */
    // $title = 'Learn PHP From Scratch';
    // $heading = 'Welcome To The Course';
    // $body = 'In this course, you will learn the fundamentals of the PHP language';

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

    // $firstName = 'John';
    // $lastName = 'Doe';
    // $fullName = $firstName . " " .$lastName;



    $number1 = 5;
    $number2 = 10;
    $number3 = '20';
    $fruit = 'apple';
    $bool1 = true;
    $bool2 = false;
    $null = null;

    //Implicit Conversion
    $result = $number1 + $number2;
    $result = $number1 + $number3; //int (string to int)
    $result = $number3 + $number3; // int (string to int)
    $result = $number1 . $number2; // string (int to string)
    // $result = $fruit . $number2; // error
    $result = $number1 + $bool1; // int (bool to int)
    $result = $number1 + $bool2; //int bool to int
    $result = $number1 + $null; // int (null to int)

    //Explicit conversion
    $result = (string) $number1;
    $result = (int) $number3;
    $result = (bool) $number1;

    var_dump($result);
    ?> -->





 <?php
// /*
// | Arithmetic Operators
// | Operator | Description    |
// | -------- | -------------- |
// | `+`      | Addition       |
// | `-`      | Subtraction    |
// | `*`      | Multiplication |
// | `/`      | Division       |
// | `%`      | Modulus        |
// */

// $output = null;
// $num1 = 20;
// $num2 = 10;

// $output = '$num1 + $num2 = ' . $num1 + $num2 ;

// $output = rand();
// $output = getrandmax();
// $output = rand (1,10);

// // round ()
// $output = round(4.7);

// //ceil
// $output = ceil(4.2);

// //floor()
// $output = floor(4.9);

// //sqrt() 
// $output = sqrt(64);

// //pi()
// $output = pi();

// //abs()
// $output = abs(-4.7);

// //max()
// $output = max(1,24,2,5);

// //min()
// $output = min(1,24,2,5);

// //number_format()
// $output = number_format(1234567.191234,2,'.',',');

// $output = null;
// $string = 'Hello world';

// //strlen
// $output = strlen($string);

// //str_word_count
// $output = str_word_count($string);

// // strpos
// $output = strpos($string,'world');

// //Get specific char by index
// $output = $string[4];

// //substr
// $output = substr($string,6,5);

// // str_repalce()
// $output= str_replace('world','Universe',$string);

// //strtoupper
// $output = strtoupper($string);

// //strtolower
// $output = strtolower($string);

// //ucwords
// $output = ucwords($string);

// $output = trim('    Hello World   ');





//Dates and Timers

$output = null;

//get year
$output = date('Y');

//get year with timestamp
$output = date('Y',902030111);

//get timestamp from strtotime
$output = date('Y',strtotime('2001-10-16'));

//get month
$output = date ('m');

//get day
$output = date('D');
$output = date('l');

//full date
$output = date('Y-m-d');

//get hour
$output = date('h');

//get min
$output = date('i');

//get second
$output = date('s');

//get am/pm
$output = date('a');

//put it all together
$output = date('Y-m-d h:i:s a');

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <!-- Output -->
       <p class="text-xl">
        <?= $output ?>
       </p>
    </div>
  </div>
</body>

</html> 










































    <!-- <!DOCTYPE html>
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
    
    </html> -->