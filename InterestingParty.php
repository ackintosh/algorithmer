<?php
class InterestingParty
{
    public function __construct()
    {
    }

    public function bestInvitation(Array $first, Array $second)
    {
        $interest_count = array();
        for ($i = 0; $i < count($first); $i++) {
            $this->countup($interest_count, $first[$i]);
            $this->countup($interest_count, $second[$i]);
        }
        return max($interest_count);
    }

    private function countup(&$interest_count, $interest)
    {
        if (@$interest_count[$interest] === null) $interest_count[$interest] = 0;
        $interest_count[$interest]++;
    }
}

