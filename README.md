How to create your own shareable bundle
=======================================

Run this command to create a fast skeleton
```bash
php bin/console generate:bundle
# it will ask if you want to reuse it, say yes.
# it will ask how do you want to configure it, choose xml since is the most common way to do it.
```

Remember to configure an alias for your service:

```xml
<?xml version="1.0" ?>

<container xmlns="http://symfony.com/schema/dic/services"
    xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
    xsi:schemaLocation="http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd">

    <!--
    <services>
        <service id="diario_as_hello_test.example" class="DiarioAs\HelloTestBundle\Example">
            <argument type="service" id="service_id" />
            <argument>plain_value</argument>
            <argument>%parameter_name%</argument>
        </service>
    </services>
    -->
    <services>
        <service id="diario_as_hello_test.hello_test" class="DiarioAs\HelloTestBundle\Service\HelloTest" public="true" />
        <service id="DiarioAs\HelloTestBundle\Service\HelloTest" alias="diario_as_hello_test.hello_test" public="true" />
    </services>
</container>
```

How to use it in your project:
In your project composer.json:
```json
 [...]
    "require" : {
        [...]
        "company/demobundle" : "dev-master"
    },
    "repositories" : [{
        "type" : "vcs",
        "url" : "https://github.com/Company/DemoBundle.git"
    }],
    [...]

```
