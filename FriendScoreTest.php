<?php
require_once 'FriendScore.php';

class FriendScoreTest extends PHPUnit_Framework_TestCase
{
	public function setUp()
	{
		$this->fs = new FriendScore();
	}

	public function testHighestScore_Ex0()
	{
		$friends = array("NNN", "NNN", "NNN");
		$expected = 0;

		$this->assertEquals($expected, $this->fs->highestScore($friends));
	}

	public function testHighestScore_Ex1()
	{
		$friends = array("NYY", "YNY", "YYN");
		$expected = 2;

		$this->assertEquals($expected, $this->fs->highestScore($friends));
	}

	public function testHighestScore_Ex2()
	{
		$friends = array(
			"NYNNN",
			"YNYNN",
			"NYNYN",
			"NNYNY",
			"NNNYN");
		$expected = 4;

		$this->assertEquals($expected, $this->fs->highestScore($friends));
	}

	public function testHighestScore_Ex3()
	{
		$friends = array(
			"NNNNYNNNNN",
			"NNNNYNYYNN",
			"NNNYYYNNNN",
			"NNYNNNNNNN",
			"YYYNNNNNNY",
			"NNYNNNNNYN",
			"NYNNNNNYNN",
			"NYNNNNYNNN",
			"NNNNNYNNNN",
			"NNNNYNNNNN");
		$expected = 8;

		$this->assertEquals($expected, $this->fs->highestScore($friends));
	}

	public function testHighestScore_Ex4()
	{
		$friends = array(
			"NNNNNNNNNNNNNNY",
			"NNNNNNNNNNNNNNN",
			"NNNNNNNYNNNNNNN",
			"NNNNNNNYNNNNNNY",
			"NNNNNNNNNNNNNNY",
			"NNNNNNNNYNNNNNN",
			"NNNNNNNNNNNNNNN",
			"NNYYNNNNNNNNNNN",
			"NNNNNYNNNNNYNNN",
			"NNNNNNNNNNNNNNY",
			"NNNNNNNNNNNNNNN",
			"NNNNNNNNYNNNNNN",
			"NNNNNNNNNNNNNNN",
			"NNNNNNNNNNNNNNN",
			"YNNYYNNNNYNNNNN");
		$expected = 6;

		$this->assertEquals($expected, $this->fs->highestScore($friends));
	}
}