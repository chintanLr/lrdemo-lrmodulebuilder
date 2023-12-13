# How to create and publish a Laravel Module Builder package

## Getting Started
- Create a fresh laravel package

```
composer create-project laravel/laravel packagetestapp
```
- change directory to the new folder

```
cd packagetestapp
```

- When it's done you need to configure your env file and set your app key and other necessary details. In your terminal type:

```
cp .env.example .env
```

- generate the app key

```
php artisan key:generate

```
- Require package in composer.json

```
composer config repositories.lrdemo-lrmodulebuilder vcs https://github.com/chintanLr/lrdemo-lrmodulebuilder
```

- install the package

```
composer require lrdemo/lrmodulebuilder
```

- Now, open the config/app.php file and scroll down to the providers array. In that array, there should be a section for the package service providers. Add the following line of code in that section:

```
/*
 * Package Service Providers...
*/

Lrdemo\Lrmodulebuilder\Providers\LrbuilderServiceProvider::class,
```

```
php artisan serve
```

Visit http://localhost:8000/builder in your browser to view the demo.
