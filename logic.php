<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 9/19/2015
 * Time: 12:22 AM
 */

//create empty vars
$numWords = 0;
$numChars = 0;
$numNums = 0;
$password = "";
$words = [];

//load the list of words into an array using the 'file' command
$wordList = (file('word_list.txt'));


//if the value is set, get the number of words from POST and make it a local var
if(isset($_GET['numWords'])){
    if((2 <= $_GET['numWords']) && ($_GET['numWords'] <= 6)){
        $numWords = $_GET['numWords'];
    }
    else echo $_GET['numWords'] . "You've made a big mistake!";
}

//if the user wants any special chars, get the number of chars requested
if(isset($_GET['numWords'])) {
    $numChars = $_GET['numChars'];
}

//if the user wants any numbers, get the number of numbers requested
if(isset($_GET['numNums'])) {
    $numNums = $_GET['numNums'];
}

//get the length of the word list
$wordListLength = count($wordList);

//call getRandomWord once for each word requested by the user via the numWords variable
for($i = 0; $i < $numWords; $i++ ) {
    $words[$i] =  $randomWord = getRandomWord($wordList, $wordListLength - 1);
}

//concatenate all of the random words together to make a single string
for($i = 0; $i < sizeof($words) - 1; $i++){
    $password .= $words[$i];
}

//include special characters if requested
for($i = 0; $i < $numChars; $i++){
    $password .= getRandomSymbol();
}

//include numbers if requested
for($i = 0; $i < $numNums ; $i++){
    $password .= getRandomNum();
}

//remove all the spaces from the assembled password
$password = preg_replace('/\s+/', '', $password);

//print completed password!
echo $password;

//function to randomly choose a word from the word list
function getRandomWord($wordList, $wordListLength){
//create a random numbers, from 0 to $wordListLength
    $randomWordNum = rand(0, $wordListLength);

    //pick a word from the list according to what number was generated
    return $wordList[$randomWordNum];
}

function getRandomSymbol(){
    //define array of special characters
    $specialChars = ["!","@","#","$","%","^","&","*","(",")","_","+","<",">","?"];

    //generate a random number that will choose a character from the
    $randomCharNum = rand(0, sizeof($specialChars) - 1);
    return $specialChars[$randomCharNum];
}

function getRandomNum(){
    //define array of special characters
    $numberListArray = [0,1,2,3,4,5,6,7,8,9];

    //generate a random number that will choose a character from the
    $randomNumIndex = rand(0, sizeof($numberListArray) - 1);
    return $numberListArray[$randomNumIndex];
}

