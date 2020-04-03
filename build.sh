# Remove old files
rm -f build/packages/*.zip
rm -f build/*.zip

# Zip Plugin
cd plugins/console/printconfig
zip -qr ../../../build/packages/plg_console_printconfig.zip ./*

# Zip Bin Files
cd ../../../
zip -qr build/packages/bin_joomlacommands.zip bin/*

# Zip Library
cd libraries/joomla-commands
zip -qr ../../build/packages/library_joomlacommands.zip vendor/* joomla-commands.xml
cd ../../

cd build

zip -q pkg_joomlacommands.zip *.xml packages/*.zip

cd ../
