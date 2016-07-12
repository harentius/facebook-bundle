Harentius Facebook Bundle
=========================

Bundle for integration facebook-php-sdk-v4 and Symfony framework. Simple wrapper.

Installation
------------

### 1) Download the Bundle:

```bash
composer.phar require harentius/facebook-bundle
```

### 2) Enable the Bundle:

```php
// app/AppKernel.php

// ...
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            // ...

            new Harentius\Bundle\FacebookBundle\HarentiusFacebookBundle(),
        );

        // ...
    }

    // ...
}
```

### 3) Configure the bundle

```yml
# app/config/config.yml
harentius_facebook:
    app_id: %facebook_app_id%
    app_secret: %facebook_app_secret%
    # Optional:
    default_graph_version: %facebook_graph_version%
```

Usage
-----

Bundle registers configured facebook service 'harentius.facebook'.

In Controllers:

```php
$this->get('harentius.facebook');
```

For getting information about service usage please look documentation:
[https://github.com/facebook/facebook-php-sdk-v4](https://github.com/facebook/facebook-php-sdk-v4)
