# Faker Provider vCard

This package will allow you to easily generate fakes vCards using [Faker PHP](https://github.com/fzaninotto/Faker)

## Install

To install, use composer:

```bash
composer require cloudmanaged/vcard-faker-provider
```

## Use

```php
$faker = \Faker\Factory::create();
$faker->addProvider(new \Faker\Provider\en_US\Person($faker));
$faker->addProvider(new \Faker\Provider\en_US\Address($faker));
$faker->addProvider(new \Faker\Provider\en_US\PhoneNumber($faker));
$faker->addProvider(new \Faker\Provider\en_US\Company($faker));
$faker->addProvider(new \Faker\Provider\Internet($faker));
$faker->addProvider(new Faker\Provider\VCard($faker));
```

```
$faker->vcard
```

> You will need Person, Address, PhoneNumber, Company and Internet provider to be able to generated vCards

## License

This wrapper is under the MIT license. See the complete license in the wrapper:

[LICENSE](https://github.com/CloudManaged/vcard-faker-provider/LICENSE)

## About

vCard Faker Provider is a [CloudManaged](https://github.com/CloudManaged) initiative.
See also the list of [contributors](https://github.com/CloudManaged/vcard-faker-provider/graphs/contributors).

## Reporting an issue or a feature request

Issues and feature requests are tracked in the [GitHub issue tracker](https://github.com/CloudManaged/vcard-faker-provider/issues).

## TODO

Add more options to be able to add/remove information to the vCards 
