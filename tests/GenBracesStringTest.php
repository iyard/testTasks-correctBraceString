<?php

namespace BracesString\Tests;

use PHPUnit\Framework\TestCase;

use function BracesString\GenBracesString\genString;

class GenBracesStringTest extends TestCase
{
    /**
    * @dataProvider additionProvider
    */
    public function testGenDiff($expected, $bracesCount)
    {
        $this->assertEquals($expected, genString($bracesCount));
    }

    public function additionProvider()
    {
        $bracesCount1 = 0;
        $expected1 = '';
        
        $bracesCount2 = 1;
        $expected2 = '()';
        
        $bracesCount3 = 2;
        $expected3 = '()()';
        
        $bracesCount4 = 3;
        $expected4 = '({})()';

        $bracesCount5 = 4;
        $expected5 = '({})({})';

        $bracesCount6 = 5;
        $expected6 = '({[]})({})';

        $bracesCount7 = 6;
        $expected7 = '({[]})({[]})';

        $bracesCount8 = 7;
        $expected8 = '({[()]})({[]})';

        $bracesCount9 = 8;
        $expected9 = '({[()]})({[()]})';

        return [
            [$expected1, $bracesCount1],
            [$expected2, $bracesCount2],
            [$expected3, $bracesCount3],
            [$expected4, $bracesCount4],
            [$expected5, $bracesCount5],
            [$expected6, $bracesCount6],
            [$expected7, $bracesCount7],
            [$expected8, $bracesCount8],
            [$expected9, $bracesCount9]
        ];
    }
}
