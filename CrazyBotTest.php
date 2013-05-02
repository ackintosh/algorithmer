<?php
require_once 'CrazyBot.php';

class CrazyBotTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider provider
     */
    public function testGetProbability($n, $east, $west, $south, $north, $expect)
    {
        $crazyBot = new CrazyBot();
        $this->assertEquals($expect, $crazyBot->getProbability($n, $east, $west, $south, $north));
    }

    public function provider()
    {
        return array(
            array(1, 25, 25, 25, 25, 1.0),
            array(2, 25, 25, 25, 25, 0.75),
            array(7, 50, 0, 0, 50, 1.0),
            array(14, 50, 50, 0, 0, (float)"1.220703125e-4"),
        );
    }
}
