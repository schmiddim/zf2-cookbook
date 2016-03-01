#!/bin/bash

pathToIndexPhp=`pwd`
pathToIndexPhp=$pathToIndexPhp/public/index.php
php  $pathToIndexPhp orm:schema-tool:update --force
