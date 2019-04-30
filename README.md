# Nova Card Extended

[![Total Downloads](https://img.shields.io/packagist/dt/cloudstudio/card-extended.svg?style=flat-square)](https://packagist.org/packages/cloudstudio/card-extended)

##### Nova Card Preview

![Captura de pantalla 2019-04-30 a las 18 19 08](https://user-images.githubusercontent.com/3589377/56976983-7718c080-6b74-11e9-8956-573d9915f6f9.png)


### Installation

You can install the package in to a Laravel app that uses [Nova](https://nova.laravel.com) via composer:

```bash
composer require cloudstudio/card-extended
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
