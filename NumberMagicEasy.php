<?php

class NumberMagicEasy
{
    private $numbers = array(
        1 => null,
        2 => null,
        3 => null,
        4 => null,
        5 => null,
        6 => null,
        7 => null,
        8 => null,
        9 => null,
        10 => null,
        11 => null,
        12 => null,
        13 => null,
        14 => null,
        15 => null,
        16 => null,
    );

    private $card1 = array(1, 2, 3, 4, 5, 6, 7, 8);
    private $card2 = array(1, 2, 3, 4, 9, 10, 11, 12);
    private $card3 = array(1, 2, 5, 6, 9, 10, 13, 14);
    private $card4 = array(1, 3, 5, 7, 9, 11, 13, 15);

	private static function stringToArray($str)
	{
		return preg_split('//', $str, null, PREG_SPLIT_NO_EMPTY);
	}

    private function merge($cardname)
    {
        foreach ($this->numbers as $k => $v) {
            if (in_array($k, $this->$cardname)) {
                if ($v === false) {
                    continue;
                } else {
                    $this->numbers[$k] = true;
                }
            } else {
                if ($v === false ) {
                    continue;
                } else {
                    $this->numbers[$k] = false;
                }
            }
        }
    }

    public function theNumber($answer)
    {
        foreach (self::stringToArray($answer) as $k => $v) {
            $cardname = 'card' . ($k + 1);
            if ($v === 'Y') {
                foreach ($this->numbers as $nk => $nv) {
                    $this->numbers[$nk] = in_array($nk, $this->$cardname) ? true : false;
                }
            } else {
                foreach ($this->$cardname as $c) $this->numbers[$c] = false;
            }
        }
        var_dump($this->numbers);
        exit;
        return array_search(true, $this->numbers);
    }
}
