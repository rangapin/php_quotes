<!DOCTYPE html>
<html>
<body>


<?php

// creating a multidimentional array

$quotes = array(

// creating each elements of the $quotes array as associative array

	['quote' => 'Variable are a confusing thing at first',
	 'source' => 'Jeffrey Way',
	 'citation' => 'PHP Practitioner',
	 'year' => '2016'],

	['quote' => 'Think of a function as a named bit of logic',
	'source' => 'Jeffrey Way',
	'citation' => 'PHP Practitioner',
	'year' => '2016'],

	['quote' => 'But here is one thing to understand that is may be a higher level than you are right now',
	'source' => 'Jeffrey Way',
	'citation' => 'PHP Practitioner',
	'year' => '2016'],

	['quote' => 'A class can represent any possible thing in your project or in your domain.',
	'source' => 'Jeffrey Way',
	'citation' => 'PHP Practitioner',
	'year' => '2016'],

	['quote' => 'A constructor is something that will automatically happen whenever you prepare a new task or a product or a user.',
	'source' => 'Jeffrey Way',
	'citation' => 'PHP Practitioner',
	'year' => '2016'],

	['quote' => 'I get to introduce you to functions, which you can sort of think of as, verbs of the programming world. Functions are responsible for doing things.',
	 'source' => 'Victor Hugo',
	 'citation' => 'Les Misérables',
	 'year' => '1862'],

	['quote' => 'It is only with the heart that one can see rightly; what is essential is invisible to the eye.',
	 'source' => 'Antoine de Saint-Exupéry',
	 'citation' => 'The Little Prince ',
	 'year' => '1943'],

	['quote' => 'I had put this earlier as an example over in your functions.php file: (...) But I was expecting you to add on the appropriate HTML'	,
	 'source' => 'Jennifer Nordell',
	 'citation' => 'Slack',
	 'year' => '2021'],

	['quote' => 'Men at some time are masters of their fates: The fault, dear Brutus, is not in our stars, But in ourselves, that we are underlings.',
	 'source' => 'William Shakespeare ',
	 'citation' => 'Julius Caesar',
	 'year' => '1599'],

	['quote' => 'All human wisdom is contained in these two words - Wait and Hope',
	 'source' => 'Alexandre Dumas',
	 'citation' => 'The Count of Monte Cristo',
	 'year' => '1846']
);

// creating a getRandomQuote function that return a random key from our quote array

function getRandomQuote($quotes) {

	return $quotes[array_rand($quotes)];

}

// creating a printQuote function that uses our random key to generate our quote and with its sources, and conditionally add the citation and year

function printQuote($quotes) {
	!
	$randomQuote = getRandomQuote($quotes);
	$newEmptyString = " ";
	$newEmptyString .= '<p class="quote">' . $randomQuote["quote"] . '</p>';
	$newEmptyString .= '<p class="source">' . $randomQuote["source"];

	if ($randomQuote["citation"] != " ") {
		$newEmptyString .= '<span class="citation">' . " " . $randomQuote["citation"] . '</span>';
	}
	
	if ($randomQuote["year"] != " ") {
		$newEmptyString .= '<span class="year">' . " " .  $randomQuote["year"] . '</span>';
	}

	$newEmptyString .= '</p>';

	return $newEmptyString;

}

printQuote($quotes);

?>
</body>
</html>

