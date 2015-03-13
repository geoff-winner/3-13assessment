<?php
    require_once "src/WordCount.php";

    class WordCountTest extends PHPUnit_Framework_TestCase
    {
        function test_WordCount()
        {
            //Arrange
            $test_WordCount = new WordCount;
            $input1 = "a";
            $input2 = array("a");


            //Act
            $result = $test_WordCount->countWords($input1, $input2);

            //Assert
            $this->assertEquals(1, $result);
        }
        function test_WordCount1()
        {
            //Arrange
            $test_WordCount = new WordCount;
            $input1 = "aa";
            $input2 = array("aa");


            //Act
            $result = $test_WordCount->countWords($input1, $input2);

            //Assert
            $this->assertEquals(2, $result);
        }
        function test_WordCount1()
        {
            //Arrange
            $test_WordCount = new WordCount;
            $input1 = "aa";
            $input2 = array("aa");


            //Act
            $result = $test_WordCount->countWords($input1, $input2);

            //Assert
            $this->assertEquals(2, $result);
        }
    }

?>
