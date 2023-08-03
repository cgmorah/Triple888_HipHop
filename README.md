
# Triple888 HipHop Module for Magento 2

The Triple888 HipHop module is a Magento 2 extension that adds functionality to track and display the number of times a HipHop product has been added to the cart.

## Structure

The module is structured into several directories and files, each serving a specific purpose:

- `Block`: Contains the Counter block class responsible for retrieving add-to-cart counts.
  - `Counter.php`: The main block class.
- `etc`: Contains XML configuration files.
  - `di.xml`: Dependency injection configuration.
  - `module.xml`: Module declaration.
- `Model`: Contains the HipHopCounter model class to handle database interactions.
  - `HipHopCounter.php`: The model class for managing counters.
- `Plugin`: Contains the CartPlugin class.
  - `CartPlugin.php`: A plugin to intercept add-to-cart actions.
- `Setup`: Contains classes for installing and setting up the module.
  - `InstallData.php`: Adds the Hip Hop attribute to products.
  - `InstallSchema.php`: Creates the database table for tracking counts.
- `view`: Contains frontend layout and templates.
  - `frontend/layout/catalog_product_view.xml`: Layout XML for the frontend.
  - `frontend/templates/counter.phtml`: Template file to display the counter.

## Development

### Prerequisites
- Magento 2.4 (or compatible versions)
- PHP 7.4 or higher

### Installation

You can install the module manually or automate the installation using a script.

#### Manual Installation

Follow these steps to install the module:

1. Concatenate the ZIP parts to get the full ZIP file.
2. Extract the ZIP content into the `app/code` folder of your Magento 2 installation.
3. Enable the module by running:
   ```bash
   php bin/magento module:enable Triple888_HipHop
   php bin/magento setup:upgrade
   php bin/magento cache:clean
   ```
4. Compile (if in production mode):
   ```bash
   php bin/magento setup:di:compile
   ```

#### Automated Installation

You can create a Bash script to automate the installation. Here's an example:

```bash
#!/bin/bash
# Navigate to Magento root directory
cd /path/to/your/magento2
# Enable the module, upgrade the database, clear the cache, and compile
php bin/magento module:enable Triple888_HipHop
php bin/magento setup:upgrade
php bin/magento cache:clean
php bin/magento setup:di:compile
echo "Triple888 HipHop module has been successfully installed!"
```

## Features, Compatibility, License, Support

[...]
