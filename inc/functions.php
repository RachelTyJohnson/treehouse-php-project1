<?php
// PHP - Random Quote Generator

//////////////////////////////////////////////////////////////////

//multidimensional array to house quotes
$quotes = [
  [
    "quote"     =>  "Toto, I've got a feeling we're not in Kansas anymore.",
    "source"    =>  "Dorothy",
    "citation"  =>  "The Wizard of Oz",
    "year"      =>  1939,
    "tags"      =>  "movies"
  ],
  [
    "quote"     =>  "May the Force be with you.",
    "source"    =>  "Yoda",
    "citation"  =>  "Star Wars",
    "year"      =>  1977,
    "tags"      =>  "movies"
  ],
  [
    "quote"     =>  "May the Force be with you.",
    "source"    =>  "Yoda",
    "citation"  =>  "Star Wars",
    "year"      =>  1977,
    "tags"      =>  "movies"
  ],
  [
    "quote"     =>  "It is not in the stars to hold our destiny but in ourselves.",
    "source"    =>  "William Shakespeare",
    "tags"      =>  "inspirational"
  ],
  [
    "quote"     =>  "Begin now to be what you will be hereafter.",
    "source"    =>  "Saint Jerome",
    "tags"      =>  "inspirational"
  ],
  [
    "quote"     =>  "Talk is cheap. Show me the code.",
    "source"    =>  "Linus Torvalds",
    "tags"      =>  "programming"
  ],
  [
    "quote"     =>  "Creativity is nothing but a mind set free.",
    "source"    =>  "Torrie T. Asai",
    "year"      =>  2015,
    "tags"      =>  "design"
  ],
  [
    "quote"     =>  "Art is anything you can get away with.",
    "source"    =>  "Marshal McLuhan",
    "year"      =>  2005,
    "tags"      =>  "art"
  ]
];

//////////////////////////////////////////////////////////////////

//function to generate random number and pull a quote out from that
function getRandomQuote($array){

  //get length of the array
  $length = count($array) -1;

  //get random number using length of array
  $randomNumber = rand(0,$length);

  //return the quote array at the index of random number
  return $array[$randomNumber];
}

//////////////////////////////////////////////////////////////////

// Create the printQuote funtion and name it printQuote
function printQuote(){

  //call the getRandomQuote function and get a random quote
  $theQuote = getRandomQuote($GLOBALS['quotes']);

  //start the display string
  $displayString = '
  <p class="quote">' . $theQuote["quote"] . '</p>
  <p class="source">' . $theQuote["source"];

  //check if citation exists
  if (array_key_exists("citation",$theQuote)){
    $displayString .= '<span class="citation">' . $theQuote["citation"] . '</span>';
  }

  //check if year exists
  if (array_key_exists("year",$theQuote)){
    $displayString .= '<span class="year">' . $theQuote["year"] . '</span>';
  }

  //check if tags exists
  if (array_key_exists("tags",$theQuote)){
    $displayString .= '<span class="tags">' . $theQuote["tags"] . '</span>';
  }

  //end display string
  $displayString .= '</p>';

  //show display string
  echo $displayString;
}

//////////////////////////////////////////////////////////////////

//gradient array for background
$gradients = [
  ['#003973', '#e5e5be'],
  ['#348f50', '#56b4d3'],
  ['#ff6e7f', '#bfe9ff'],
  ['#314755', '#26a0da'],
  ['#2b5876', '#4e4376'],
  ['#00467f', '#a5cc82'],
  ['#536976', '#bbd2c5'],
  ['#9796f0', '#fbc7d4'],
  ['#1f4037', '#99f2c8'],
  ['#c31432', '#240b36'],
  ['#654ea3', '#eaafc8'],
  ['#ff4b1f', '#ff9068']
];

//function to change background color
function changeBackground(){
//get random Number
$randcolorNum = rand(0,count($GLOBALS['gradients'])-1);
$theColor = $GLOBALS['gradients'][$randcolorNum];
$colorString = 'background-image: linear-gradient(120deg, '.$theColor[0].' , '.$theColor[1].' );';
echo $colorString;
}

?>
