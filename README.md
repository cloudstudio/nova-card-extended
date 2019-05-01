# Nova Card Extended

[![Total Downloads](https://img.shields.io/packagist/dt/cloudstudio/card-extended.svg?style=flat-square)](https://packagist.org/packages/cloudstudio/card-extended)


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
        (new CardExtended())
            ->view('cards.text')
            ->data(User::find(1))
            ->onlyOnDetail()
            ->width('full'),
    ];
}

```

First parameter is a typical blade view

```php
resurces/views/cards/text.blade.php

```

Example view 

```html

<div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
    <img class="w-full" src="https://tailwindcss.com/img/card-top.jpg" alt="Sunset in the mountains">
    <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">{{ $data->name }}</div>
        <p class="text-grey-darker text-base">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
        </p>
    </div>
    <div class="px-6 py-4">
        <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#photography</span>
        <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#travel</span>
        <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker">#winter</span>
    </div>
</div>

```

##### Nova Card Preview

![Captura de pantalla 2019-04-30 a las 18 19 08](https://user-images.githubusercontent.com/3589377/56976983-7718c080-6b74-11e9-8956-573d9915f6f9.png)

( Preview with this blade )

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
