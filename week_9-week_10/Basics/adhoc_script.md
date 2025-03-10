# Ad hoc scripting

## Basic script
`install-package.sh`
```sh
#!/bin/bash
# Node cmd line argument variable is $1

if [ -n "$1"]; then
    echo "Package to install: $1"
else
    echo "Package name not supplied!"
    exit
fi

ansible all -b -m yum -a "name=$1 state=present"
```

## CLI execution
```
$ ./install-package.sh nginx
```