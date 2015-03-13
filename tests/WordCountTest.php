<?php
    require_once "src/WordCount.php";

    class WordCountTest extends PHPUnit_Framework_TestCase
    {
        function test_WordCount()
        {
            //Arrange
            $test_WordCount = new WordCount;
            $input1 = "a";
            $input2 = "a";



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
            $input2 = "aa";



            //Act
            $result = $test_WordCount->countWords($input1, $input2);

            //Assert
            $this->assertEquals(1, $result);
        }
        function test_WordCount2()
        {
            //Arrange
            $test_WordCount = new WordCount;
            $input1 = "ab";
            $input2 = "ab";



            //Act
            $result = $test_WordCount->countWords($input1, $input2);

            //Assert
            $this->assertEquals(1, $result);
        }
        function test_WordCount3()
        {
            //Arrange
            $test_WordCount = new WordCount;
            $input1 = "aaa";
            $input2 = "aaa";



            //Act
            $result = $test_WordCount->countWords($input1, $input2);

            //Assert
            $this->assertEquals(1, $result);
        }
        function test_WordCount4()
        {
            //Arrange
            $test_WordCount = new WordCount;
            $input1 = "abc";
            $input2 = "abc cat abc";



            //Act
            $result = $test_WordCount->countWords($input1, $input2);

            //Assert
            $this->assertEquals(2, $result);
        }
        function test_WordCount5()
        {
            //Arrange
            $test_WordCount = new WordCount;
            $input1 = "kitty";
            $input2 = "kitty eats kitty";



            //Act
            $result = $test_WordCount->countWords($input1, $input2);

            //Assert
            $this->assertEquals(2, $result);
        }
    }

?>
