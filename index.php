<?php


// method 1 single-line comment

# method 2 single-line comment

/* multi-lines comment 

........

.......

*/

$result = 5 + /* comment */ + 5;

/* Case senstivity */

/*
echo $result.'<br>';
Echo $result.'<br>';
eCho $result.'<br>';
ECHO $result.'<br>';

//echo 'result = '.$Result;
//echo 'result = '.$RESULT;

/* Variable declaration & variable nesting */

/*
$text = "text variable";
//global variable
$x = 5;
$y = 10.5;


echo "test variable nesting $text".'<br>';

/*variable scope */

// scope
/*
function scopeTest1(){
	//local variable
	$x = 6;
	echo "variable inside function is ".$x.'<br>';
}  

scopeTest1();

echo "variable outside function is ".$x.'<br>';

function scopeTest2(){
	global $x,$y;
	$y = $x + $y;
}

scopeTest2();

echo $y.'<br>';

function scopeTest3(){
	static $x = 0;
	echo $x.'<br>';
	$x++;
}

scopeTest3();
scopeTest3();
scopeTest3();
scopeTest3();*/

/* DATA Types 

String
Integer
Float
Boolean
Array
Object
NULL 

*/

/* Constants */

define('variable_key','variable_value');

/* echo */ variable_key;

function ConstantValueTest(){
	return  variable_key;
}

ConstantValueTest();


/* Opertors */
$x = 3; $y = 2;


# 1) Arithm   etic 

/* x+y x-y x*y x/y x%y */

/* echo */ $x ** $y; # --> 3²

# 2) Assignement 

/* x+=y x-=y x*=y x/=y */ 

# 3) Comparaison == === != !== > < >= <= <=>
    
/* string fucntions */

$var = 'Formalab';

strlen($var);

str_word_count($var);

strrev($var);

strpos($var,'o'); #strpos($var,'o','2')

str_replace('o','i',$var);

# substr 

substr($var,1);

substr($var,1,3);

substr($var,-5,1);

strtolower($var);

strtoupper($var);

strcmp($var,$var); # 0 , 1 , -1 (equal,1>2,1<2) 

explode(' ',$var);

$array = array('Formalab','test');

implode($array,' ');


/* Arrays */

/* 

Indexed arrays - Arrays with a numeric index
Associative arrays - Arrays with named keys
Multidimensional arrays - Arrays containing one or more arrays

*/

# Indexed Arrays 

$array = array('value 1','value 2','value 3');

//echo $array[0];
//echo $array[1];
//echo $array[2];

//echo count($array);

for($i = 0;$i < count($array); $i++)
{
	//echo $array[$i].'<br>';
}

# Associative Arrays

$array1 = array(
	'variable1_key' => 'variable1_value',
	'variable2_key' => 'variable2_value',
	'variable3_key' => 'variable3_value',
);

//echo count($array1);

//echo $array1['variable1_key'];

foreach($array1 as $key => $value){
	//echo $key.' => '.$value.'<br>';
}

# Mutimdimensional Arrays

$array2 = array(
	'array1' => array(0,1,2),
	'array2' => array(
		'0' => 0,
		'1' => 1,
		'2' => 2,
		'3' => 3
	) 
);

//echo count($array2['array2']);

//$_SERVER["REQUEST_METHOD"] == "POST"

//<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);">*/

function DoubleArrayValues($item) {
	return  $item * 10;
}
 
$items = array (
		100,
		50,
		250,
		70,
		500 
);
$new_array = array_map ('DoubleArrayValues', $items );
print_r ($new_array);



$text = "text variable";
//global variable
$x = 5;
$y = 10.5;


echo "test variable nesting $text".'<br>';

?>

