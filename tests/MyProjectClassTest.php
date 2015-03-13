<?php

    require_once "src/WordCount.php";

    class WordCountTest extends PHPUnit_Framework_TestCase
    {
        function test_countWord()
        {
            //Arrange
            $test_input = new WordCountTest;
            $input1 = array("a");
            $input2 = array("a");


            //Act
            $result = $test_input->countWord($input1);

            //Assert
            $this->assertEquals(1, $result);
        }
    }

?>
