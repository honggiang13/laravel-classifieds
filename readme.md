# Classifieds

## Usage

### Step 1: Installation

The best and easiest way to install Classifieds is with Composer.

If you have installed Composer globally run the following:

```
composer require codenexus/classifieds "1.0.*"
```

Otherwise you'll have to manually download the composer.phar file:

```
curl -sS https://getcomposer.org/installer | php
php composer.phar require codenexus/classifieds "1.0.*"
```

### Step 2: Add the Service Provider

Update the `providers` array in `config/app.php`, like so:

```
'Codenexus\Classifieds\ClassifiedsServiceProvider',
```

### Step 3: Publish the assets

Run the following command to publish the migrations and config file.

```
php artisan vendor:publish --provider="Codenexus\Classifieds\ClassifiedsServiceProvider"
```

### Step 4: Run the migrations

Run the following command to migrate Classifieds after publishing the assets.

```
php artisan migrate
```

### Step 5: Modify the configuration

After publishing, the classifieds config file can be found under `config/codenexus.classifieds.php` where you can modify the package configuration.