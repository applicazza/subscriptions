# Plans and subscriptions for Laravel 5.4

## Installation

To get started, require this package:

```bash
composer require applicazza/subscribership
```

Add service provider to your application's `app.config`

```php
    'providers' => [
        // ...
        Applicazza\Subscribership\SubscribershipServiceProvider::class,
    ],
```

Publish migrations

```bash
php artisan vendor:publish --provider="Applicazza\Subscribership\SubscribershipServiceProvider" --tag=migrations
```

Publish configuration file and modify values in it according to your needs (optional)

```bash
php artisan vendor:publish --provider="Applicazza\Subscribership\SubscribershipServiceProvider" --tag=config
```

Modify your application's model that should be subcribable to plans by implementing ```ISubscriber``` interface and attaching ```Subscribable``` trait. For example

```php
class Team extends Model implements ISubscriber
{
    use Subscribable, SoftDeletes;
}
```

## Usage

TBD

## License

The MIT License

Copyright (c) 2017 applicazza, SP. http://applicazza.com

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.