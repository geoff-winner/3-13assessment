<?php

    class WordCount
    {
        function countWords($input1, $input2)
        {
            if(in_array($input1, $input2)){
              return count($input1);
            }
          return $input1;

        }
    }

?>
