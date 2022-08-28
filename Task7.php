<?php

namespace src;

class Task7
{
    public function main(array $arr, int $position): array
    {
        unset($arr[$position]);
        $newArray = [];

        foreach ($arr as $value) {
            $newArray[] = $value;
        }

        return $newArray;
    }
}