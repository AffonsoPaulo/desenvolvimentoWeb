<?php
    function obterMedia(float $n1, float $n2):float {
        return (($n1 + $n2) / 2);
    }

    function preencherGrau(float $m, string &$g):void {
    if($m > 9)
        $g = "A";
    elseif($m >= 7)
        $g  = "B";
    elseif($m >= 4)
        $g = "C";
    elseif($m >= 2)
        $g = "D";
    else
        $g = "E";
    }