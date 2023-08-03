
# Triple888 HipHop Module for Magento 2

The Triple888 HipHop module is a Magento 2 extension that adds functionality to track and display the number of times a HipHop product has been added to the cart.

## Structure

The module is structured as follows:
- `Block`: Contains the Counter block class.
- `etc`: Contains XML configuration files.
- `Model`: Contains the HipHopCounter model class.
- `Plugin`: Contains the CartPlugin class.
- `Setup`: Contains classes for installing and setting up the module.
- `view`: Contains frontend layout and templates.

## Development

### Prerequisites
- Magento 2.4 (or compatible versions)
- PHP 7.4 or higher

### Installation

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

## Features

- Adds a "Hip Hop" attribute to products, allowing to mark products as HipHop.
- Tracks the number of times a HipHop product is added to the cart.
- Displays the add-to-cart count on the product page.

## Compatibility

The module has been developed following Magento 2 standards and is expected to be compatible with Magento 2.4. Testing in the specific environment is recommended.

## License

This project is open-source and available under the [MIT License](LICENSE.md).

## Support

For support and inquiries, please contact me @cgmorah.
