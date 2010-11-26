#!/bin/bash


if [ $# -ge 1 ]; then
  USERNAME=$1@
else
  USERNAME=
fi

scp -r * ${USERNAME},playerstage@web.sourceforge.net/htdocs/test_6653

