<?php

class CrazyBot
{
    private $field = array();
    private $move = array();
    private $mx = array(1, -1, 0, 0);
    private $my = array(0, 0, -1, 1);

    public function getProbability($n, $east, $west, $south, $north)
    {
        $this->move[0] = $east / 100;
        $this->move[1] = $west / 100;
        $this->move[2] = $south / 100;
        $this->move[3] = $north / 100;

        return $this->dfs($n, 50, 50);
    }

    private function dfs($n, $x, $y)
    {
        if (@$this->field[$x][$y]) return 0;
        if ($n <= 0 ) return 1;

        $this->field[$x][$y] = true;

        $ret = 0;
        for ($i = 0; $i < 4; $i++) {
            $ret += $this->move[$i] * $this->dfs($n - 1, $x + $this->mx[$i], $y + $this->my[$i]);
        }

        $this->field[$x][$y] = false;

        return $ret;
    }

}
