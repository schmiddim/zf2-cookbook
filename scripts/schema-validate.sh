#!/bin/bash

pathToIndexPhp=`pwd`
pathToIndexPhp=$pathToIndexPhp/public/index.php
php  $pathToIndexPhp orm:validate-schema
