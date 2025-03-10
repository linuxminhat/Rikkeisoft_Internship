```
$ ansible all -b -a "getenforce"
db2 | SUCCESS | rc=0 >>
Enforcing

localhost | SUCCESS | rc=0 >>
Enforcing

db1 | SUCCESS | rc=0 >>
Enforcing
```

```
$ ansible all -m shell -a "cmd=sudo systemctl status firewalld |grep active"

db1 | SUCCESS | rc=0 >>
   Active: active (running) since Mon 2020-10-26 18:39:18 UTC; 3min 22s ago

db2 | SUCCESS | rc=0 >>
   Active: active (running) since Mon 2020-10-26 18:39:17 UTC; 3min 22s ago

localhost | SUCCESS | rc=0 >>
   Active: active (running) since Mon 2020-10-26 18:39:18 UTC; 3min 22s ago
```
