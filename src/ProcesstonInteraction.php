<?php

namespace Processton\ProcesstonInteraction;

class ProcesstonInteraction
{
    public static function width(
        $sm = 12,
        $lg = 12,
        $md = 12,
        $additional = []
    ) {
        return new ProcesstonInteractionWidth(
            $sm,
            $lg,
            $md,
            $additional
        );
    }

    public static function generateBreadCrumbs(...$breadcrumbs){
        return [ ...$breadcrumbs ];
    }

    public static function generateBreadCrumbItem(
        $label,
        $slug,
        $icon = ''
    )
    {
        return [
            'lable' => $label,
            'slug' => $slug,
            'icom' => $icon
        ];
    }
    
    public static function generateInteraction(
        $title,
        $slug,
        $subTitle = '',
        $icon = '',
        $breadcrumbs = [],
        $filters = [],
        $elements = []
    ){
        return [
            'title' => $title,
            "slug" => $slug,
            'subtitle' => $subTitle,
            'icon' => $icon,
            "schema" => [
                "breadcrumbs" => [ ...$breadcrumbs ],
                "filters" => [ ...$filters ],
                "elements" => [ ...$elements ]
            ]
        ];
    }


    public static function generateRow(
        $elements,
        $width = false
    ){
        return [
            "type" => "row",
            'width' => $width instanceof ProcesstonInteractionWidth ? $width->toArray() : self::width(12, 12, 12)->toArray(),
            "elements" => [
                ...$elements
            ]
        ];
    }


    public static function generateElement(
        $type, 
        $title, 
        $data, 
        $subTitle = '', 
        $attachments = [], 
        $elements = [],
        $width = false,
        $name = '',
    ){
        if(!$title) {
            $title = '';
        }
        return [
            'type' => $type,
            'name' => $name ? $name : $title,
            'title' => $title,
            'subtitle' => $subTitle,
            'attachments' => [...$attachments],
            'srcOfData' => ['api_endpoint' => '', 'attachments' => []],
            'data' => [...$data],
            'elements' => [...$elements],
            'width' => $width instanceof ProcesstonInteractionWidth ? $width->toArray() : self::width(12, 12, 12)->toArray(),
        ];
    }

    public static function generateElementByUrl(
        $dataSrc,
        $title = '',
        $subTitle = '',
        $type = '',
        $attachments = [],
        $elements = [],
        $width = false,
        $name = '',
    ){
        return [
            'type' => $type,
            'name' => $name ? $name : $title,
            'title' => $title,
            'subtitle' => $subTitle,
            'attachments' => [...$attachments],
            'srcOfData' => ['api_endpoint' => $dataSrc, 'attachments' => [...$attachments] ],
            'data' => [],
            'elements' => [...$elements],
            'width' => $width instanceof ProcesstonInteractionWidth ? $width->toArray() : self::width(12, 12, 12)->toArray(),
        ];
    }

}
