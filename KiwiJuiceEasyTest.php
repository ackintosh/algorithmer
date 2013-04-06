<?php
require 'KiwiJuiceEasy.php';

class Fig41Test extends PHPUnit_Framework_TestCase
{
    public function testThePouring_Ex0()
    {
        $capacities = array(20, 20);
        $bottles = array(5, 8);
        $fromId = array(0);
        $toId = array(1);
        $expect = array(0, 13);
        $kiwijuice = new KiwiJuiceEasy();
        $this->assertSame($expect, $kiwijuice->thePouring($capacities, $bottles, $fromId, $toId));
    }

    public function testThePouring_Ex1()
    {
        $capacities = array(10, 10);
        $bottles = array(5, 8);
        $fromId = array(0);
        $toId = array(1);
        $expect = array(3, 10);
        $kiwijuice = new KiwiJuiceEasy();
        $this->assertSame($expect, $kiwijuice->thePouring($capacities, $bottles, $fromId, $toId));
    }
    public function testThePouring_Ex2()
    {
        $capacities = array(30, 20, 10);
        $bottles = array(10, 5, 5);
        $fromId = array(0, 1, 2);
        $toId = array(1, 2, 0);
        $expect = array(10, 10, 0);
        $kiwijuice = new KiwiJuiceEasy();
        $this->assertSame($expect, $kiwijuice->thePouring($capacities, $bottles, $fromId, $toId));
    }

    public function testThePouring_Ex3()
    {
        $capacities = array(14, 35, 86, 58, 25, 62);
        $bottles = array(6, 34, 27, 38, 9, 60);
        $fromId = array(1, 2, 4, 5, 3, 3, 1, 0);
        $toId = array(0, 1, 2, 4, 2, 5, 3, 1);
        $expect = array(0, 14, 65, 35, 25, 35);
        $kiwijuice = new KiwiJuiceEasy();
        $this->assertSame($expect, $kiwijuice->thePouring($capacities, $bottles, $fromId, $toId));
    }

    public function testThePouring_Ex4()
    {
        $capacities = array(700000, 800000, 900000, 1000000);
        $bottles = array(478478, 478478, 478478, 478478);
        $fromId = array(2, 3, 2, 0, 1);
        $toId = array(0, 1, 1, 3, 2);
        $expect = array(0, 156956, 900000, 856956);
        $kiwijuice = new KiwiJuiceEasy();
        $this->assertSame($expect, $kiwijuice->thePouring($capacities, $bottles, $fromId, $toId));
    }
}


