<?php

namespace Processton\ProcesstonInteraction\Tests\Unit;


use PHPUnit\Framework\TestCase;
use Processton\ProcesstonInteraction\ProcesstonInteraction;

class InteractionsTest extends TestCase
{

    public function test_interaction_empty(): void
    {
        $content = ProcesstonInteraction::generateInteraction('Title', '/slug');

        $expected = [
            'title' => 'Title',
            "slug" => '/slug',
            'subtitle' => '',
            'icon' => '',
            "schema" => [
                "breadcrumbs" => [],
                "filters" => [],
                "elements" => []
            ]
        ];

        $this->assertEquals($expected, $content);

    }

    public function test_interaction_subtitle(): void
    {
        $content = ProcesstonInteraction::generateInteraction('Title', '/slug', 'Subtitle');

        $expected = [
            'title' => 'Title',
            "slug" => '/slug',
            'subtitle' => 'Subtitle',
            'icon' => '',
            "schema" => [
                "breadcrumbs" => [],
                "filters" => [],
                "elements" => []
            ]
        ];

        $this->assertEquals($expected, $content);

    }
}