rm -f build/packages/*.zip
rm -f build/*.zip

cd plugins/console/printconfig
zip -q ../../../build/packages/plg_console_printconfig.zip ./*
cd ../../../
zip -q build/packages/bin_joomlacommands.zip bin/*

cd build

zip -q pkg_joomlacommands.zip *.xml packages/*.zip

cd ../
