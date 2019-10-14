<?php

namespace BracesString\GenBracesString;

function genString($bracesCount)
{
    $bracesCount = (int) $bracesCount;
    $firstPartOpen = [];
    $firstPartClose = [];
    $secondPartOpen = [];
    $secondPartClose = [];
    for ($i = 1; $i <= $bracesCount; $i++) {
        if (!isEven($i)) {
            $firstPartOpen[] = getBrace($i, 'open');
            $firstPartClose[] = getBrace($i, 'close');
        } else {
            $secondPartOpen[] = getBrace($i, 'open');
            $secondPartClose[] = getBrace($i, 'close');
        }
    }
    $firstPartString = implode($firstPartOpen) . implode(array_reverse($firstPartClose));
    $secondPartString = implode($secondPartOpen) . implode(array_reverse($secondPartClose));
    
    return $firstPartString .  $secondPartString;
}

function isEven($num)
{
    return $num % 2 == 0;
}

function getBrace($braceIndex, $open)
{
    $braceIndex = $braceIndex > 6 ? $braceIndex % 6 : $braceIndex;
    $braces = ['1' => ['open' => '(', 'close' => ')'],
                '2' => ['open' => '(', 'close' => ')'],
                '3' => ['open' => '{', 'close' => '}'],
                '4' => ['open' => '{', 'close' => '}'],
                '5' => ['open' => '[', 'close' => ']'],
                '6' => ['open' => '[', 'close' => ']']
                ];
    return $braces[$braceIndex][$open];
}
