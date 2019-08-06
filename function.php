<?php
function declOfNum($number, $one, $two, $tree, $showNumber)
{
  $str="";
  if($showNumber==true)
  {
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
}
else
{
if($number==0||$number==5)
{
  $str= $tree;
}
if($number==1)
{
  $str= $one;
}
if($number==22)
{
  $str= $two;
}
}
  echo $str;
  echo "</br>";
}

//примеры вывода:
declOfNum(0, 'элемент', 'элемента', 'элементов', true);  //0 элементов
declOfNum(1, 'элемент', 'элемента', 'элементов', false); //элемент
declOfNum(5, 'элемент', 'элемента', 'элементов', false); //элементов
declOfNum(22, 'элемент', 'элемента', 'элементов', true); //22 элемента


 ?>
