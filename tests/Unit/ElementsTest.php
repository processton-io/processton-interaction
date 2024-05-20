<?php

namespace Processton\ProcesstonInteraction\Tests\Unit;


use PHPUnit\Framework\TestCase;
use Processton\ProcesstonInteraction\ProcesstonInteraction;

class ElementsTest extends TestCase
{

    public function test_element(): void
    {
        $content = ProcesstonInteraction::generateElement(
            'anyType',
            'Title',
            [],
            'Sub Title',
            [],
            [], ProcesstonInteraction::width(12,12,12));

        $expected = [
            'type' => 'anyType',
            'name' => 'Title',
            'title' => 'Title',
            'subtitle' => 'Sub Title',
            'attachments' => [],
            'srcOfData' => [
                'api_endpoint' => '',
                'attachments' => [],
            ],
            'data' => [],
            'elements' => [],
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
        ];

        $this->assertEquals($expected, $content);

    }

    public function test_element_by_url(): void
    {
        $content = ProcesstonInteraction::generateElementByUrl(
            'api.com/dummydata',
            'Title',
            'Sub Title',
            'anyType',
            [],
            [],
            ProcesstonInteraction::width(12, 12, 12)
        );

        $expected = [
            'type' => 'anyType',
            'name' => 'Title',
            'title' => 'Title',
            'subtitle' => 'Sub Title',
            'attachments' => [],
            'srcOfData' => [
                'api_endpoint' => 'api.com/dummydata',
                'attachments' => [],
            ],
            'data' => [],
            'elements' => [],
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
        ];

        $this->assertEquals($expected, $content);

    }

}