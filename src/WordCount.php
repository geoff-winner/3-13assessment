<?php

    class WordCount
    {
        function countWords($input1, $input2)
        {
        $count = substr_count($input2, $input1);
            return $count;
        }

    }
?>
