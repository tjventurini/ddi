# Tjventurini\DDI

This package provides a helper method, `ddi()`. This helper works just like the usual `dd()` helper that you know and
 love but it will add an additional method signature to the dump. That way you always know where the dd is taking place.

## Installation

To install this package you can just require it via composer.

```shell script
composer require tjventurini/ddi
```

## Usage and Example

```php
namespace Acme\Foo;

class Bar {
    public function baz() {
        // dump and die
        ddi('example');

        // dump and continue
        dumpi('example');
    }
}
```

This will add the string `Acme\Foo\Bar::baz` as first variable to your `dd()` output. The `dumpi()` helper method
 works the same way, but for the `dump()` helper method.
 
For more information about the `dd()` and `dump()` method take a look at the [documentation](https://laravel.com/docs/helpers).
