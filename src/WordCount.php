<?php

    class WordCount
    {
        function countWords($input1, $input2)
        {
        $count = substr_count($input2, $input1); // counts instances of input1 within input2
            return $count;
        }

    }
?>
