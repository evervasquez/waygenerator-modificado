# Fast Workflow in Laravel With Custom Generators

[![Build Status](https://travis-ci.org/JeffreyWay/Laravel-4-Generators.png?branch=master)](https://travis-ci.org/JeffreyWay/Laravel-4-Generators)

This Laravel 4 package provides a variety of generators to speed up your development process. These generators include:

- `generate:model`
- `generate:view`
- `generate:repository`
- `generate:controller`
- `generate:seed`
- `generate:migration`
- `generate:pivot`
- `generate:resource`
- `generate:scaffold`

## Installation

> [Want a 5-minute video overview?](https://dl.dropboxusercontent.com/u/774859/Work/Laravel-4-Generators/Get-Started-With-Laravel-Custom-Generators.mp4)

Begin by installing this package through Composer. Edit your project's `composer.json` file to require `way/generators`.

	"require-dev": {
		"way/generators": "2.*"
	}

> Please note that version 2 of this package removed support for a couple of generators, such as `generate:form`. If you'd like to continue using them, stick with version `1.1`.

Next, update Composer from the Terminal:

    composer update --dev

Once this operation completes, the final step is to add the service provider. Open `app/config/app.php`, and add a new item to the providers array.

    'Way\Generators\GeneratorsServiceProvider'

That's it! You're all set to go. Run the `artisan` command from the Terminal to see the new `generate` commands.

    php artisan

