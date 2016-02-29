<?php

  
  $name1 = fopen("text1.txt", "a");
    //"a" -говорит о ДОзаписи
    //"w" - о переписывании всего
    //"r" -для чтения
  fputs ($name1, "hello "."\n")   
  fclose ($name1);
?>
