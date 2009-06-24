#!/bin/bash


if [ $# -ge 1 ]; then
  USERNAME=$1@
else
  USERNAME=
fi

scp -r * ${USERNAME}shell.sourceforge.net:/home/groups/p/pl/playerstage/htdocs
ssh ${USERNAME}shell.sourceforge.net "cd /home/groups/p/pl/playerstage/htdocs/doc && for f in *.tgz; do tar xzf \$f ; done"
