<?php
require_once('MazeMaker.php');

class MazeMakerTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->mazeMaker = new MazeMaker();
    }

    public function test_longetPath_example0()
    {
        $maze = array(
            '...',
            '...',
            '...',
        );
        $startRow = 0;
        $startCol = 1;
        $moveRow = array(1, 0, -1, 0);
        $moveCol = array(0, 1, 0, -1);
        $expect = 3;

        $this->assertEquals($expect, $this->mazeMaker->longestPath($maze, $startRow, $startCol, $moveRow, $moveCol));

    }


    public function test_longetPath_example1()
    {
        $maze = array(
            '...',
            '...',
            '...',
        );
        $startRow = 0;
        $startCol = 1;
        $moveRow = array(1, 0, -1, 0, 1, 1, -1, -1);
        $moveCole = array(0, 1, 0, -1, 1, -1, 1, -1);
        $expect = 2;

        $this->assertEquals($expect, $this->mazeMaker->longestPath($maze, $startRow, $startCol, $moveRow, $moveCol));

    }
}

