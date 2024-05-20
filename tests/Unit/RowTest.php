<?php

namespace Processton\ProcesstonInteraction\Tests\Unit;


use PHPUnit\Framework\TestCase;
use Processton\ProcesstonInteraction\ProcesstonInteraction;

class RowTest extends TestCase
{

    public function test_row_empty(): void
    {
        $content = ProcesstonInteraction::generateRow([], ProcesstonInteraction::width(12,12,12));

        $expected = [
            'type' => 'row',
            'width' => [
                'sm' => 12,
                'lg' => 12,
                'md' => 12,
                'xs' => 12,
                'xxs' => 12,
                'xxxs' => 12,
                'xl' => 12,
                'xxl' => 12,
                'xxxl' => 12
            ],
            'elements' => []
        ];

        $this->assertEquals($expected, $content);

    }

}