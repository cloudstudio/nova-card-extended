# Nova Card Extended

[![Total Downloads](https://img.shields.io/packagist/dt/cloudstudio/time-tracker.svg?style=flat-square)](https://packagist.org/packages/cloudstudio/time-tracker)

##### Nova Card Preview

![Resource Generator Tool](https://user-images.githubusercontent.com/3589377/52174968-74d4df00-279c-11e9-8538-87aac6721e8b.png)


### Installation

You can install the package in to a Laravel app that uses [Nova](https://nova.laravel.com) via composer:

```bash
composer require cloudstudio/nova-card-extended
```

Next up, you must register the field with Nova. This is typically done in the resource file.

```php

use Cloudstudio\CardExtended\CardExtended;

/**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
*/
public function cards(Request $request)
{
    return [
        (new CardExtended())->view('cards.text', $user)
    ];
}

```

First parameter is a typical blade view

```php

resurces/views/cards/text.blade.php

```

Second parameter is the data, you can use strings, number, array, collection...

```php

$data = User::all();
$data = Auth::user()->name;
$data = ['title' => 'Hello world']
$data = 'hello!';
$data = 1;

```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.


## Credits

- [Toni Soriano](https://github.com/cloudstudio)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
