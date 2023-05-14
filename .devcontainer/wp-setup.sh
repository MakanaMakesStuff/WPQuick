#!/bin/bash

echo "Copying plugins..."

# remove default wordpress plugins
rm -rf ./plugins/*

# copy all our plugins from the data/plugins folder into the new plugins folder within our workspace
cp -r .devcontainer/data/plugins/* ./plugins

echo "
__      __ ___   ___         _      _   
\ \    / /| _ \ / _ \  _  _ (_) __ | |__
 \ \/\/ / |  _/| (_) || || || |/ _|| / /
  \_/\_/  |_|   \__\_\ \_._||_|\__||_\_\
  
"