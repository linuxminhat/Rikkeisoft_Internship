#!/bin/bash

if [ $1 ]; then
  echo "Confirming/installing package: $1"
else
  echo "Please specify a package to confirm/install."
  exit
fi

ansible all -b -m yum -a "name=$1 state=installed"