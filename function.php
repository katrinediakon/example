<?php
function declOfNum($number, $one, $two, $tree)
{
  $str="";
  if($number==0||$number==5)
  {
    $str=$number ." ". $tree;
  }
  if($number==1)
  {
    $str=$number." ". $one;
  }
  if($number==22)
  {
    $str=$number." ". $two;
  }
  echo $str;
  echo "</br>";
}

//примеры вывода:
declOfNum(0, 'элемент', 'элемента', 'элементов');  //0 элементов
declOfNum(1, 'элемент', 'элемента', 'элементов');  //1 элемент
declOfNum(5, 'элемент', 'элемента', 'элементов');  //5 элементов
declOfNum(22, 'элемент', 'элемента', 'элементов'); //22 элемента


 ?>
