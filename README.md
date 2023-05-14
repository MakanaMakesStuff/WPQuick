# WPQuick | Plugin Development Environment

## Description

WPQuick is a WordPress plugin dev environment that just makes it easier to get started with plugin development. It comes with a plugin called ```Loader``` that serves as a boilerplate for your plugin development. This plugin is a class loader that loads all the classes within it's sub-directories for you. It doesn't use any official autoloaders, but it does the job well.

## Installation

1. Clone this repo into whatever directory you want to work in.

2. Open the project in vscode.

3. Click 'Reopen in Container' in the bottom right corner of VSCode.

4. In your terminal you should see a message that says 'WPQuick' and 'press any key to exit this terminal...'.

5. If everything went well, you should be able to go to ```http://localhost:8080``` and see the WordPress installation screen.

6. Follow the WordPress installation instructions and you should be good to go.

### NOTE: plugins are not automatically activated upon installation. Please navigate to http://localhost:8080/wp-admin/plugins.php to activate any plugins as usual. If you want to customize this container and load in your own plugins by default, then you must add or remove plugins from .devcontainer/data/plugins before building the container.
