# Coding Standard

## 🔧 Installation

1. Run
    ```shell
    composer require alphpaca/coding-standard --dev
    vendor/bin/ecs init
    vendor/bin/rector init
    vendor/bin/psalm --init
    touch phpstan.neon
    ```

2. Replace the content of the `ecs.php` file
    ```php
    <?php

    declare(strict_types=1);

    use Symplify\EasyCodingStandard\Config\ECSConfig;

    return static function (ECSConfig $ecsConfig): void {
       $ecsConfig->import('vendor/alphpaca/coding-standard/ecs.php');
   
       $ecsConfig->paths([__DIR__ . '/src', __DIR__ . '/tests']);
    };

    ```

3. Replace the content of the `rector.php` file 
    ```php
    <?php

    declare(strict_types=1);

    use Rector\Config\RectorConfig;

    return static function (RectorConfig $rectorConfig): void {
        $rectorConfig->import('vendor/alphpaca/coding-standard/rector.php');

        $rectorConfig->paths([
            __DIR__ . '/src',
            __DIR__ . '/tests',
        ]);
    }
   
    ```

4. Create the `phpstan.neon` file with the following configuration
    ```yaml
    parameters:
    level: 9

    excludes_analyse:
        - 'tests/Application/**/*.php'

    ```

5. Replace the content of the `psalm.xml` file
    ```xml
    <?xml version="1.0"?>
    <psalm
        errorLevel="1"
        xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
        xmlns="https://getpsalm.org/schema/config"
        xsi:schemaLocation="https://getpsalm.org/schema/config vendor/vimeo/psalm/config.xsd"
        xmlns:xi="http://www.w3.org/2001/XInclude"
    >
        <xi:include href="vendor/alphpaca/coding-standard/psalm_files.xml"/>
        <xi:include href="vendor/alphpaca/coding-standard/psalm_file_extensions.xml"/>
        <xi:include href="vendor/alphpaca/coding-standard/psalm_plugins.xml"/>
    </psalm>

    ```

6. **(Optional)** To run a static analysis process before each commit run
   ```shell
   cp vendor/alphpaca/coding-standard/bin/pre-commit.dist .git/hooks/pre-commit
   ```
