<?php
function declOfNum($number, array $fields)
{
  $str="";
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
  echo $str;
  echo "</br>";
}

//примеры вывода:
declOfNum(0, ['элемент', 'элемента', 'элементов']);  //0 элементов
declOfNum(1, ['элемент', 'элемента', 'элементов']);  //1 элемент
declOfNum(5, ['элемент', 'элемента', 'элементов']);  //5 элементов
declOfNum(22, ['элемент', 'элемента', 'элементов']); //22 элемента

 ?>
