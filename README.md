# censor-text
[![Latest Version on Packagist](https://img.shields.io/packagist/v/repat/censor-text.svg?style=flat-square)](https://packagist.org/packages/repat/censor-text)
[![Total Downloads](https://img.shields.io/packagist/dt/repat/censor-text.svg?style=flat-square)](https://packagist.org/packages/repat/censor-text)

**censor-text** is a package to help search and replace specific texts, such as email address(es).

## Installation
`$ composer require repat/censor-text`

## Documentation

```php
// Init
$text = new \Repat\Text();

// With Setter
$text->setText('My email address is foobar@example.com');
$text->censorEmail();
// returns: 'My email address is ******************'

// Chain
$text->setText('My email address is foobar@example.com')->censorEmail();

// In Constructor
$text = new \Repat\Text('My email address is foobar@example.com');

// Exchange censoring character
$text->censorEmail("❚");
// returns: My email address is ❚❚❚❚❚❚❚❚❚❚❚❚❚❚❚❚❚❚❚❚❚❚

// Laravel
$text = resolve(\Repat\Text::class);
$text->setText('My email address is foobar@example.com')->censorEmail();

// Helper function
censor_email('My email address is foobar@example.com');
censor_email('My email address is foobar@example.com', "❚");
```

## License
* MIT, see [LICENSE](https://github.com/repat/censor-text/blob/master/LICENSE)

## Version
* Version 0.1

## Contact
#### repat
* Homepage: https://repat.de
* e-mail: repat@repat.de
* Twitter: [@repat123](https://twitter.com/repat123 "repat123 on twitter")

[![Flattr this git repo](http://api.flattr.com/button/flattr-badge-large.png)](https://flattr.com/submit/auto?user_id=repat&url=https://github.com/repat/censor-text&title=censor-text&language=&tags=github&category=software)
