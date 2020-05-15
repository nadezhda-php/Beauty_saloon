<?php
//print_r($_POST);
if($_POST["name"]=="")
{
    echo "Введите имя.<a href='/'>Вернуться</a>";
}
else
    header("Location:index.php");
echo "<hr />";

if (isset($x))
{
    echo "Переменная существует";
}
else echo "Переменная не существует";
?>