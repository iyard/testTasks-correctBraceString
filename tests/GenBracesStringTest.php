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
        $this->assertEquals($expected, $bracesCount);
    }

    public function additionProvider()
    {
        $bracesCount1 = true;
        $expected1 = true;
        
        $bracesCount2 = true;
        $expected2 = true;
        
        $bracesCount3 = true;
        $expected3 = true;
        
        $bracesCount4 = true;
        $expected4 = true;
        

        return [
            [$expected1, $bracesCount1],
            [$expected2, $bracesCount2],
            [$expected3, $bracesCount3],
            [$expected4, $bracesCount4]
        ];
    }
}
