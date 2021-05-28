<?php

/**
 * Echo
 * ---------------
 * نمایش
 */

echo 5555.5;

hr();

echo 'Ali';

hr();

// Integer عدد
// String رشته
// float 55.5 -> Double -> 55555.555

/**
 * --------
 * Variable 
 * ----------------
 * متغیر ها
 * ----------------------
 */

$adad_1 = 13;

$adad_2 = 13;

$jam_kol = $adad_1 + $adad_2;

echo $jam_kol;

hr();

echo 'سلام من ' . $jam_kol . ' عدد پاستیل دارم';

hr();

echo 'Hi ' . '&nbsp;&nbsp;&nbsp;&nbsp;' . ' My Friend';

hr();

/**
 * ----------------------
 * علامت ها یا عملگرهای ریاضی
 * ------------------------------
 * - جمه
 * + تفریق
 * / تقسیم
 * % باقیمانده
 * * ضرب
 * ------------------------------------------------
 * = ریختن
 * == مقایسه
 * === متشابه
 * -------------------------------------------------------
 * ++ یه دونه دیگه اضافه کن
 * -- یه دونه کم کن
 */

$a = 20;
$b = 10;
$b += $a;
$b++; // 31

// نوع اول نوشتن  $b = $b + $a;
// نوع دوم نوشتن  $b += $a;

echo $b;

hr();

$jam = $a * $b; // ضرب
$jam2 = $a / $b; // تقسیم
$jam3 = $a % $b; // باقیمانده
$jam4 = $a - $b; // تفریق
echo "[ $jam4 ]" . "[ $jam3 ]";

hr();

/**
 * Function 
 * --------------
 * توابع
 */

function jam($a, $b, $c)
{
    return $a + $b + $c;
}

function tafrigh($a, $b)
{
    return $a - $b;
}

function hr()
{
    echo '<hr>';
}

function br()
{
    echo '<br>';
}

echo jam(10, 5, 10) - tafrigh(10, 5);

hr();

/**
 * طول رشته
 */

$test = 'ali571';

echo strlen($test);

hr();

/**
 * تعداد کلمات
 */

$mant_boland = 'salam , khobin che khabar az sal 99ergrtg';

echo str_word_count($mant_boland);

hr();

/**
 * برعکس نویسی جملات
 */

echo strrev($mant_boland);

hr();

/**
 * جستجو در جمله
 */

echo strpos($mant_boland, 'khabar');

hr();

/**
 * تعویض یا جایگذاری
 */

echo str_replace('khobin', 'khak to sar ,', $mant_boland);

hr();

/**
 * Define
 * --------------
 * ثابت ها
 */

define('livan', 'این لیوان است');

echo livan;

hr();

/**
 * شرط ها
 */

// حالت ابتدایی شرط

$saat = 5;

if ($saat > 5) {

    echo 'از 5 بزگتر است';
    hr();
} else {

    echo 'از 5 کوچکتر است';
    hr();
}

// شرط نویسی تمیز تر

// if ($saat > 5) :

// elseif ($saat == 5) :

// else :

// endif;

$color = 'red';

if ($color == 'blue') {
    echo 'آبی است';
    hr();
} elseif ($color == 'red') {
    echo 'قرمز است';
    hr();
} elseif ($color == 'green') {
    echo 'سبز است';
    hr();
} else {
    echo 'اصلا رنگ نیست';
    hr();
}

$hour = date('h');

if ($hour <= 9) :

    echo 'صبحت بخیر';

elseif ($hour < 17) :

    echo 'عصر بخیر';

else :

    echo 'َشب بخیر';

endif;

echo $hour;

hr();

// شرط با if

if ($color == 'blue') {
    echo 'آبی است';
} elseif ($color == 'red') {
    echo 'قرمز است';
} elseif ($color == 'green') {
    echo 'سبز است';
} else {
    echo 'اصلا رنگ نیست';
}

hr();

// شرط با switch

switch ($color):

    case 'blue':
        echo 'آبی است';
        break;

    case 'red':
        echo 'قرمز است';
        break;

    case 'green':
        echo 'سبز است';
        break;

    default:
        echo 'اصلا رنگ نیست';
        break;

endswitch;

hr();

$x = 0;

while ($x < 5) :

    $table = null;

    $table .= '<table border=1>';

    $table .= '<tr>';

    $table .= '<td>satr ' . $x . ' while</td>';

    $table .= '<td>satr ' . $x . ' while</td>';

    $table .= '</tr>';

    $table .= '</table>';

    $x++;

    echo $table;

    hr();

endwhile;

for ($x = 0; $x < 10; $x++) :

    $table = null;

    $table .= '<table border=1>';

    $table .= '<tr>';

    $table .= '<td>satr ' . $x . ' For</td>';

    $table .= '<td>satr ' . $x . ' For</td>';

    $table .= '</tr>';

    $table .= '</table>';

    echo $table;

    br();

endfor;