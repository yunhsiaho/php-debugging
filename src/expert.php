<?php
declare(strict_types=1);


// Below are several code blocks, read them, understand them and try to find whats wrong.
// Once this exercise is finished, we'll go over the code all together and we can share how we debugged the following problems.
// Try to fix the code every time and good luck ! (write down how you found out the answer and how you debugged the problem)
// =============================================================================================================================

// === Exercise 1 ===
// Below we're defining a function, but it doesn't work when we run it.
// Look at the error you get, read it and it should tell you the issue...,
// sometimes, even your IDE can tell you what's wrong
echo "Exercise 1 starts here:";


    
    function new_exercise($x) {
    $block = "<br/><hr/><br/><br/>Exercise $x starts here:<br/>";
    echo $block;

}




new_exercise(2);
// === Exercise 2 ===
// Below we create a week array with all days of the week.
// We then try to print the first day which is monday, execute the code and see what happens.

$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[1];

echo $monday;


new_exercise(3);
// === Exercise 3 ===
// This should echo ` "Debugged !" `, fix it so that that is the literal text echo'ed

// $str = Debugged ! Also very fun”;
// echo substr($str, 0, 10);
//ans 3
$str = "Debugged ! Also very fun";
echo substr($str, 0, 10);




new_exercise(4);
// === Exercise 4 ===
// Sometimes debugging code is just like looking up code and syntax...
// The print_r($week) should give:  Array ( [0] => mon [1] => tues [2] => wednes [3] => thurs [4] => fri [5] => satur [6] => sun )
// Look up whats going wrong with this code, and then fix it, with ONE CHARACTER!

foreach($week as &$day) {
    $day = substr($day, 0, strlen($day)-3);
}

print_r($week);




new_exercise(5);
// === Exercise 5 ===
// The array should be printing every letter of the alfabet (a-z) but instead it does that + aa-yz
// Fix the code so the for loop only pushes a-z in the array

// $arr = [];
// for ($letter = 'a'; $letter <= 'z'; $letter++) {
//     array_push($arr, $letter);
// }

// print_r($arr); // Array ([0] => a, [1] => b, [2] => c, ...) a-z alfabetical array

//ans 5
$arr = [];
for ($letter = 'a'; $letter != 'aa'; $letter++) {
    array_push($arr, $letter);
}

print_r($arr); // Array ([0] => a, [1] => b, [2] => c, ...) a-z alfabetical array

$abc = range("a","z");
print_r($abc);




new_exercise(6);
// === Exercise 6 ===
// The fixed code should echo the following at the bottom:
// Here is the name: $name - $name2
// // $name variables are decided as seen in the code, fix all the bugs whilst keeping the functionality!
$arr = [];


function combineNames($str1 = "", $str2 = "") {
    $params = [$str1, $str2];//array
    foreach($params as &$param) {
        if ($param == "") {
            $param = randomHeroName();
        }
    }
    
    return implode("-",$params);
}


// function randomGenerate($arr, $amount) {
//     for ($i = $amount; $i > 0; $i--) {
//         array_push($arr, randomHeroName());
//     }

//     return $amount;
// }


function randomHeroName()
{
    $hero_firstnames = ["captain", "doctor", "iron", "Hank", "ant", "Wasp", "the", "Hawk", "Spider", "Black", "Carol"];
    $hero_lastnames = ["America", "Strange", "man", "Pym", "girl", "hulk", "eye", "widow", "panther", "daredevil", "marvel"];
    $heroes = [$hero_firstnames, $hero_lastnames];
    $randname = $heroes[rand(0,count([$heroes]))][rand(0, 10)];
    
    return $randname;//str
}

echo  "Here is the name: ".combineNames();

new_exercise(7);
// function copyright(int $year) {
//     return "&copy; $year BeCode";
// }
// //print the copyright
// copyright(date('Y'));

//ans 7
function copyright(int $year) {
    echo "&copy; $year BeCode";
}
//print the copyright
copyright(intval(date("Y")));

new_exercise(8);
// === Exercise 8 ===
// function login(string $email, string $password) {
//     if($email == 'john@example.be' || $password == 'pocahontas') {
//         return 'Welcome John'; //only return the 1st return
//         return ' Smith';
//     }
//     return 'No access';
// }

// //do not change anything below
// //should great the user with his full name (John Smith)
// echo login('john@example.be', 'pocahontas');
// //no access
// echo login('john@example.be', 'dfgidfgdfg');
// //no access
// echo login('wrong@example.be', 'wrong');
// //you can change things again!


// an 8
function login(string $email, string $password) {
        if($email == 'john@example.be' && $password == 'pocahontas') {
            return 'Welcome John'.' Smith';
        }
        return 'No access';
    }
    
    //do not change anything below
    //should greet the user with his full name (John Smith)
    echo login('john@example.be', 'pocahontas').'</br>';
    //no access
    echo login('john@example.be', 'dfgidfgdfg').'</br>';
    //no access
    echo login('wrong@example.be', 'wrong').'</br>';
    //you can change things again!

    new_exercise(9);
function isLinkValid(string $link) {
    $unacceptables = array('https:','.doc','.pdf', '.jpg', '.jpeg', '.gif', '.bmp', '.png');

    foreach ($unacceptables as $unacceptable) {
        if (strpos($link, $unacceptable) !== false) {
            echo 'Unacceptable Found<br />';
            return;
        }
    }
    echo 'Acceptable<br />';
}
//invalid link
isLinkValid('http://www.google.com/hack.pdf');
//invalid link
isLinkValid('https://google.com');
//VALID link
isLinkValid('http://google.com');
//VALID link
isLinkValid('http://google.com/test.txt');


new_exercise(10);

// //Filter the array $areTheseFruits to only contain valid fruits
// //do not change the arrays itself
// $areTheseFruits = ['apple', 'bear', 'beef', 'banana', 'cherry', 'tomato', 'car'];
// $validFruits = ['apple', 'pear', 'banana', 'cherry', 'tomato'];
// //from here on you can change the code

// for($i=0; $i <= count($areTheseFruits)+1; $i++) { //count =7
//     if(!in_array($areTheseFruits[$i], $validFruits)) {
//         unset($areTheseFruits[$i]);
//         echo $i.implode(" ", $areTheseFruits)." /count".count($areTheseFruits)."</br>";
//     }else{
//         echo $i.implode(" ", $areTheseFruits)." /count".count($areTheseFruits)."</br>";
//     }
// }
// var_dump($areTheseFruits);//do not change this

// 0apple bear beef banana cherry tomato car /count7  
//$i=0, $areTheseFruits[0] = apple, count =7

// 1apple beef banana cherry tomato car /count6
//$i=1, $areTheseFruits[1] = bear, delete! ,count =6

// 2apple banana cherry tomato car /count5
//$i=2, $areTheseFruits[2] = banana, count = 5

// 3apple banana cherry tomato car /count5
//$i=3, $areTheseFruits[3] = cherry, count = 5

// 4apple banana cherry tomato car /count5
//$i=4, $areTheseFruits[4] = tomato, count = 5

// 5apple banana cherry tomato car /count5

// 6apple banana cherry tomato /count4



//Filter the array $areTheseFruits to only contain valid fruits
//do not change the arrays itself

$areTheseFruits = ['apple', 'bear', 'beef', 'banana', 'cherry', 'tomato', 'car'];
$validFruits = ['apple', 'pear', 'banana', 'cherry', 'tomato'];
//from here on you can change the code
// $arr = $areTheseFruits;

for($i=0; $i <= count($areTheseFruits)+1; $i++) { //count =7
    if(!in_array($areTheseFruits[$i], $validFruits)) {
        unset($areTheseFruits[$i]);
    }
}
// $result=array_intersect_key($a1,$a2);
var_dump($areTheseFruits);