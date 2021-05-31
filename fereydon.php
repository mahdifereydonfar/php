<?php

$a = 10;
$b = 5;
$c = 2;

$x;
$y;

function br() 
{
    echo '<br>';
}

function hr()
{
    echo '<hr>';
}

$y = $a/$c-$b;
echo $y;
br();
hr();

echo 666;
echo 'ali';
br();

echo $a;
echo '<br>';

$x = $a + $c;
echo $x;

br();
hr();


if ($x <10)
echo 'low';
elseif ($x == 10)
echo 'tasavi';
else
echo 'high';


br();
hr();


echo add_1 (8, 4, 2, 3) + add_2 (5, 3);

br();
hr();

function add_1 ( $q, $w, $e, $r )
{
    return $q / $e + $w * $r;
}

function add_2 ($s, $d)
{
    return $s % $d;
}



echo '----------------------';


$text ='ali and reza is

students or techers';
echo strlen($text);
br();

echo str_word_count($text);
br();


echo strrev ($text);
br();

echo strpos($text, 'or');
br();

echo str_replace('is' ,'are' , $text);



echo'---------------------------------'
$h=10;

$hour = date('h');

if ($hour <= 9) :

    echo 'good morning';

elseif ($hour < 17) :

    echo 'good afternoon';

else :

    echo 'َgood night';

endif;

echo $hour;

hr();

$ali= 'phd';
switch ($ali):

    case 'student':
        echo '7-18';
        break;

    case 'univercity' :
        echo '19-25';
        break;

    default:
        echo 'phd';
        break;

endswitch;