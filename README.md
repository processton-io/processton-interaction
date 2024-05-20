# Generate Array Structure for Processton Interaction used in processton client

[![Latest Version on Packagist](https://img.shields.io/packagist/v/processton-io/processton-interaction.svg?style=flat-square)](https://packagist.org/packages/processton-io/processton-interaction)
[![Total Downloads](https://img.shields.io/packagist/dt/processton-io/processton-interaction.svg?style=flat-square)](https://packagist.org/packages/processton-io/processton-interaction)
![GitHub Actions](https://github.com/processton-io/processton-interaction/actions/workflows/main.yml/badge.svg)

The Processton Interaction package is a tool for generating array structures used in the Processton client. It provides a convenient way to handle interactions between different components of the Processton system. With this package, you can easily create and manage complex data structures for seamless communication within your application.

## Installation

You can install the package via composer:

```bash
composer require processton-io/processton-interaction
```

## Usage


### width
This method is used to set the width of an element.
#### Parameters:

* $sm, $lg, $md: Width for different screen sizes.
* $additional (optional): Additional parameters.

```php
ProcesstonElements::width(
    $SM_Widh,
    $MD_Widh,
    $LG_Width,
    $AditioalSizes = [
        'xxxs' => $XXXS_Width,
        'xxs' => $XXS_Width,
        'xs' => $XS_Width,
        'xl' => $XL_Width,
        'xxl' => $XXL_Width,
        'xxxl' => $XXXL_Width
    ]
)
```

### generateBreadCrumbs
This method is used to generate breadcrumbs.
#### Parameters:

* $breadcrumbs: An array of breadcrumb items.

```php
ProcesstonElements::generateBreadCrumbs(...$breadcrumbs)
```


### generateBreadCrumbItem
This method is used to generate a breadcrumb item.
#### Parameters:

* $label: The label of the breadcrumb item.
* $slug: The slug of the breadcrumb item.
* $icon (optional): The icon of the breadcrumb item.

```php
ProcesstonElements::generateBreadCrumbItem(
    $label,
    $slug,
    $icon = ''
)
```


### generateInteraction
This method is used to generate an interaction.
#### Parameters:

* $title: The title of the interaction.
* $slug: The slug of the interaction.
* $subTitle (optional): The subtitle of the interaction.
* $icon (optional): The icon of the interaction.
* $breadcrumbs (optional): The breadcrumbs of the interaction.
* $filters (optional): The filters of the interaction.
* $elements (optional): The elements of the interaction.

```php
ProcesstonElements::generateInteraction(
    $title,
    $slug,
    $subTitle,
    $icon,
    $breadcrumbs,
    $filters,
    $elements
)
```

### generateRow
This method is used to generate a row.
#### Parameters:

* $elements: The elements of the row.
* $width (optional): The width of the row.

```php
ProcesstonElements::generateRow(
    $elements,
    $width
)
```

### generateElement

This method is used to generate an element with the provided parameters.
#### 
```php
ProcesstonElements::generateElement(
    $type, 
    $title, 
    $data, 
    $subTitle, 
    $attachments, 
    $elements,
    $widthe,
    $name,
)
```
#### Parameters:

* $type: The type of the element.
* $title: The title of the element.
* $data: The data of the element.
* $subTitle (optional): The subtitle of the element.
* $attachments (optional): The attachments of the element.
* $elements (optional): The elements of the element.
* $width (optional): The width of the element.
* $name (optional): The name of the element.

### generateElementByUrl
This method is used to generate an element by URL with the provided parameters.

```php
ProcesstonElements::generateElementByUrl(
    $dataSrc,
    $title,
    $subTitle,
    $type,
    $attachments,
    $elements,
)
```
#### Parameters:

* $dataSrc: The data source URL of the element.
* $title (optional): The title of the element.
* $subTitle (optional): The subtitle of the element.
* $type (optional): The type of the element.
* $attachments (optional): The attachments of the element.
* $elements (optional): The elements of the element.


### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email ahmadkokab@gmail.com instead of using the issue tracker.

## Credits

-   [Ahmad Faryab Kokab](https://github.com/processton-io)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
