<?php
/*
echo "Hello world";
echo "<br />";

$myNomber=45;
$float=-3.25;
$string="Hello world";
$bool=true;
echo "myNumber=$myNomber";
echo "<br />";
echo "string=$string";
echo "<br />";
echo "float=$float";
echo "<br >";
echo "bool=$bool";
echo "<br />";
$myNomber=12;
echo "myNumber=$myNomber";
define("PI",3.14);// константы
echo "<br />";
echo PI;
echo defined("PI");
echo "<br />";//переход на новуюстроку
$x=32;
$y=22.13;
$summ=$x+$y;
//$ostatok=$x%$y;// остаток при делении целочисленных значений
echo "сумма $x и $y=$summ<br />";
$q=400;
$q+=10;
echo $q;
echo "<br />";
$str_1="<b>первая строка</b><input type=\"text\"/>";
$str_2="<i>вторая строка</i>";
echo "\"".$str_1.", ".$str_2."\"\\";
echo "<br />";
$x=12;
$y=34;
$z=4.25;
$bool_1=$x==$z;//проверка на равенство
echo $bool_1;
$bool_3=!($x==$y);
echo "<br />".$bool_3;
$bool_4=$x==$y||$z<$y;//логическое или
echo "<br />".$bool_4;
$bool_5=$z!=$y&&$x<$y;
echo "<br />".$bool_5;
$bool_6=$z!=$x^$y<$z;
echo "<br />".$bool_6;
$bool=!($x!=$y&&$z<$x)||$x!=$y;
echo "<br />$bool=!($x!=$y&&$z<$x)||$x!=$y";
echo "<br />";
$string1="Example";
$num=0;
$bool1=$string1==true;
echo "$bool1=$string1==true";
echo "<br />";
$bool2=$num=="";
echo "$bool2=$num == \"\";<hr />";

$bool3=$string1===true;
echo "$bool3=$string1===true";
echo "<br />";
$bool4=$num==="";
echo "$bool4=$num === \"\";<hr />";
$x=10;
$y=11;
if ($x==$y && $x!=12 && $y==11 && ($x+5)==15)
{
    echo "Все сработало";
}
else
{
    echo "Все сработало!";"<hr />";
}
echo "<hr />";
$x==$y ? $string="Да" : $string="Нет";
echo $string;


echo "<hr />";


$x=14;
    switch ($x)
  {
    case "Hello" : echo "Это строковая переменная";break;
    case 5 : echo "Эта переменная равна 5";break;
    case 7 : echo "Эта переменная равна 7";break;
    case 12 : echo "Эта переменная равна 12";break;
    default : echo "Эта переменная нам неизвестна";
  }
echo "<br />";
echo "<hr />";


for ($i=0;$i<=10;$i+=2)
  {
    echo "Цикл под номером № $i.<br />";
  }

echo "<hr />";

for ($i=100;$i>=80;$i-=2)
    {
        if($i % 5==0) continue;
        if($i <= 87) break;
        echo "Цикл под номером № $i.<br />";
    }

echo "<hr />";

$x=1;
while ($x<10)
    {
        if($x==7)
            for($y=0; $y<5; $y+=3)
                echo "Еще одна итерация-$y.<br />";
        echo "Итерация под номером № $x.<br />";
        $x++;
    }

echo "<hr />";

$z=10;
do
    {
        echo "Операция выполнилась только один раз <br />";
        $z++;
    }
while($z<15);

echo "<hr />";


    function printWords($word)
    {
        echo "$word";
    }
    function math($first,$second)
    {
        $summa=$first+$second;
        return $summa;
    }

$x=12;
$y=35;
$sum=math($x,$y);

/*
echo "<hr />";

$array=array(12,-3.25,"String",false);
echo $array[1];
$array[1]="String";
$array[2]=4.25;
echo "<br />$array[1].<br />$array[2]";
$array[4]="New Element";
echo "<br />".$array[4];
echo "<hr />";

for($i=0;$i<count($array);$i++)
    {
        echo "Элемент массива с индексом $i=".$array[$i]."<br />";

    }
echo "<hr />";
$list=array("age"=>12,"name"=>"Alex","schoolBoy"=>true);
$list["age"]=10;

echo getAverage (array("first"=>12, "sec"=>45, "third"=>23, "forth"=>55));

function getAverage ($array)
    {$summa=0;
        foreach ($array as $key => $value)
        {
            $summa+= $value;

            echo $key."<br />";
        }
        return $summa/count($array);

    }

    echo "<hr />";

    $array=array(array(12,4.46,"string",true),array("Example"),array
    (45,"strong"));
for($i=0;$i<count($array);$i++)
{
    for($j=0;$j<count($array[$i]);$j++)
    {
        echo $array[$i][$j]." | ";
    }
    echo "<br />";
}
echo"<hr />";
global $title;
$title="Главная страница";
require "header.php";
echo "Тело документа";
require "footer.php";

echo"<hr />";

/*
$x=15;
if (isset($x))//функция проверки существования переменной
{
    echo "Переменная существует";
}
else echo "Переменная не существует";

//unset($X)//удаление переменной, обычно в массивах
$x="15";
$bool=false;
$null=null;
echo  "Is Numeric-".is_numeric($x)."<br />";//проверка является переменная числом
echo  "Is Integer-".is_integer($x)."<br />";
echo  "Is Double-".is_double($x)."<br />";
echo  "Is String-".is_string($x)."<br />";
echo  "Is Boolean-".is_bool($bool)."<br />";
echo  "Is Scalar-".is_scalar($x)."<br />";//является ли обычным объектом не массивом или еще чем то
echo  "Is null-".is_null($null)."<br />";
echo  "Is array-".is_array($x)."<br />";
echo  "Type-".gettype($x)."<br />";//проверка типа переменной
echo  "Type-".gettype($null)."<br />"
*/

$array=array(12, 17, 5, 23, 56);
echo count($array)."<br />";
sort($array);//по возрастанию
print_r($array);//вывод массива на экран
echo "<br />";
rsort($array);//по убыванию
print_r($array);
echo "<br />";
asort($array);
print_r($array);
echo "<br />";
$alist=array("1"=>123,"2"=>12,"3" => 1234);
arsort($alist);
print_r($alist);
echo "<br />";
$alist=array("1"=>123,"2"=>12,"3" => 1234);
ksort($alist);
print_r($alist);

?>