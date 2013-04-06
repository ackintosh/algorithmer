<?php
require 'InterestingParty.php';

class InterestingPartyTest extends PHPUnit_Framework_TestCase
{
    public function testBestInvitation_Ex0()
    {
        $first = array("fishing", "gardening", "swimming", "fishing");
        $second = array("hunting", "fishing", "fishing", "biting");
        $expect = 4;
        $InterestingParty = new InterestingParty();
        $this->assertSame($expect, $InterestingParty->bestInvitation($first, $second));
    }

    public function testBestInvitation_Ex1()
    {
        $first = array("variety", "diversity", "loquacity", "courtesy");
        $second = array("talking", "speaking", "discussion", "meeting");
        $expect = 1;
        $InterestingParty = new InterestingParty();
        $this->assertSame($expect, $InterestingParty->bestInvitation($first, $second));
    }

    public function testBestInvitation_Ex2()
    {
        $first = array("snakes", "programming", "cobra", "monty");
        $second = array("python", "python", "anaconda", "python");
        $expect = 3;
        $InterestingParty = new InterestingParty();
        $this->assertSame($expect, $InterestingParty->bestInvitation($first, $second));
    }

    public function testBestInvitation_Ex3()
    {
        $first = array("t", "o", "p", "c", "o", "d", "e", "r", "s", "i", "n", "g", "l",
                        "e", "r", "o", "u", "n", "d", "m", "a", "t", "c", "h", "f", "o",
                        "u", "r", "n", "i");
        $second = array("n", "e", "f", "o", "u", "r", "j", "a", "n", "u", "a", "r", "y",
                        "t", "w", "e", "n", "t", "y", "t", "w", "o", "s", "a", "t", "u",
                        "r", "d", "a", "y");
        $expect = 6;
        $InterestingParty = new InterestingParty();
        $this->assertSame($expect, $InterestingParty->bestInvitation($first, $second));
    }
}
