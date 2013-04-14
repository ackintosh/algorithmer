<?php

class Cryptography
{
    public function encrypt($array)
    {
        $min_index = 0;
        foreach ($array as $k => $v) {
            if ($v <= $array[$min_index]) $min_index = $k;
        }

        return self::product(self::incrementedArray($array, $min_index));
    }

    private static function incrementedArray($array, $index)
    {
        $array[$index]++;
        return $array;
    }

    public static function product($array)
    {
        if (count($array) === 1) return $array[0];
        return array_pop($array) * self::product($array);
    }

    private function newArray($array, $i) {
        $array[$i]++;
        return $array;
    }
}

