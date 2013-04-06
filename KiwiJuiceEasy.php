<?php
class KiwiJuiceEasy
{
    public function __construct()
    {
    }

    public static function instance()
    {
        return new self();
    }

    public function thePouring_(Array $capacities, Array $bottles, Array $fromId, Array $toId)
    {
        for ($i = 0; $i < count($fromId); $i++) {
            while ($bottles[$i] > 0) {
                if ($capacities[$i] <= $bottles[$i]) break;
                $bottles[$fromId[$i]]--;
                $bottles[$toId[$i]]++;
            }
        }
        return $bottles;
    }

    public function thePouring(Array $capacities, Array $bottles, Array $fromId, Array $toId)
    {
        for ($i = 0; $i < count($fromId); $i++) {
            $diff = min($capacities[$toId[$i]] - $bottles[$toId[$i]], $bottles[$fromId[$i]]);
            if ($diff <= 0) continue;
            $bottles[$fromId[$i]] = $bottles[$fromId[$i]] - $diff;
            $bottles[$toId[$i]] = $bottles[$toId[$i]] + $diff;
        }
        return $bottles;
    }
}


