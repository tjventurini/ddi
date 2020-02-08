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
        ddi('example');
    }
}
```

This will add the string `Acme\Foo\Bar::baz` as first variable to your `dd()` output.
