<?php
// PHP - Random Quote Generator

// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array
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



// Create the getRandomQuuote function and name it getRandomQuote
function getRandomQuote($array){

  //get length of the array
  $length = count($array) -1;
  //get random number using length of array
  $randomNumber = rand(0,$length);
  //return the quote array at the index of random number
  return $array[$randomNumber];
}




// Create the printQuote funtion and name it printQuote
function printQuote(){
  $theQuote = getRandomQuote($GLOBALS['quotes']);
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

  $displayString .= '</p>';

  echo $displayString;
}
?>
