<?php
namespace Sorter;
class Sorter {

    public static function bubbleSort($array)
    {
        $res=$array;
        $length=sizeof($array);
        $numberOfIterations=$length-1;
        $numberOfSwaps=0;
        for ($iteration=0; $iteration<$numberOfIterations; $iteration++) {
            $numberOfComporasions=$length-$iteration-1;
            for ($index=0; $index<$numberOfComporasions; $index++) {
                if ($res[$index]>$res[$index+1]) {
                    $tmp=$res[$index];
                    $res[$index]=$res[$index+1];
                    $res[$index+1] = $tmp;
                    $numberOfSwaps++;
                }
            }
            if ($numberOfSwaps===0) {
                return $res;
            }
        }
        return $res;
    }
}
