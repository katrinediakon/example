<?php
function declOfNum($number, array $fields, $showNumber)

  $str="";
  if($showNumber==true)
  {
  if($number==0||$number==5)
  {
    $str=$number ." ". $fields[2];
  }
  if($number==1)
  {
    $str=$number." ".$fields[0];
  }
  if($number==22)
  {
    $str=$number." ". $fields[1];
  }
}
else
{
if($number==0||$number==5)
{
  $str= $fields[2];
}
if($number==1)
{
  $str= $fields[0];
}
if($number==22)
{
  $str= $fields[1];
}
}
  echo $str;
  echo "</br>";
}

//примеры вывода:
declOfNum(0, ['элемент', 'элемента', 'элементов'], true);  //0 элементов
declOfNum(1, ['элемент', 'элемента', 'элементов'], false); //элемент
declOfNum(5, ['элемент', 'элемента', 'элементов'], false); //элементов
declOfNum(22,['элемент', 'элемента', 'элементов'], true); //22 элемента

 ?>
