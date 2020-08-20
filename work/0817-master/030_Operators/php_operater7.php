<?php
  $x = 3;
  if ($x >= 10 && foo()) //第一個判斷式錯誤，後面的判斷式就不會執行
  //if (foo() && $x >= 10 )
    echo "yes";
  else
    echo "no";
    
  echo "<hr>";

  $x = 3;
  if ($x >= 10 & foo()) //兩個判斷式都會執行
    echo "yes";
  else
    echo "no";
    
function foo()
{
   echo "foo() is running.<br>";
}

?>