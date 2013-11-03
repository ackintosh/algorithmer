<?php
require_once 'NumberMagicEasy.php';

class NumberMagicEasyTest extends PHPUnit_Framework_TestCase
{
	public function setUp()
	{
		$this->fs = new NumberMagicEasy();
	}

	public function testTheNumber_Ex0()
	{
	    	$answer = "YNYY";
		$expected = 5;

		$this->assertEquals($expected, $this->fs->theNumber($answer));
	}

	public function testTheNumber_Ex1()
	{
	    	$answer = "YNNN";
		$expected = 8;

		$this->assertEquals($expected, $this->fs->theNumber($answer));
	}

	public function testTheNumber_Ex2()
	{
	    	$answer = "NNNN";
		$expected = 16;

		$this->assertEquals($expected, $this->fs->theNumber($answer));
	}

	public function testTheNumber_Ex3()
	{
	    	$answer = "YYYY";
		$expected = 1;

		$this->assertEquals($expected, $this->fs->theNumber($answer));
	}

	public function testTheNumber_Ex4()
	{
	    	$answer = "NYNY";
		$expected = 11;

		$this->assertEquals($expected, $this->fs->theNumber($answer));
	}
}
