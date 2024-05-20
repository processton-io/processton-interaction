<?php

namespace Processton\ProcesstonInteraction\Tests\Unit;


use PHPUnit\Framework\TestCase;
use Processton\ProcesstonInteraction\ProcesstonInteraction;

class BreadCrumbsTest extends TestCase
{

    public function test_breadcrumbs_empty(): void
    {
        $content = ProcesstonInteraction::generateBreadCrumbs();

        $expected = [];

        $this->assertEquals($expected, $content);

    }

    public function test_breadcrumb_item(): void
    {
        $content = ProcesstonInteraction::generateBreadCrumbItem('Home', '/');

        $expected = [
                'lable' => 'Home',
                'slug' => '/',
                'icom' => ''
        ];

        $this->assertEquals($expected, $content);

    }

    public function test_breadcrumb_filled(): void
    {
        $content = ProcesstonInteraction::generateBreadCrumbs(
            ProcesstonInteraction::generateBreadCrumbItem('Home', '/'),
            ProcesstonInteraction::generateBreadCrumbItem('Dashboard', '/dashboard'),
            ProcesstonInteraction::generateBreadCrumbItem('Users', '/users'),
        );

        $expected = [
            [
                'lable' => 'Home',
                'slug' => '/',
                'icom' => ''
            ],
            [
                'lable' => 'Dashboard',
                'slug' => '/dashboard',
                'icom' => ''
            ],
            [
                'lable' => 'Users',
                'slug' => '/users',
                'icom' => ''
            ]
        ];

        $this->assertEquals($expected, $content);

    }
}