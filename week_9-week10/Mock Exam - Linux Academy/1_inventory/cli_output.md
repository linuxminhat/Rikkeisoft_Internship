```
$ sudo vi /etc/ansible/ansible.cfg
```

```ini
#inventory      = /etc/ansible/hosts
inventory      = /etc/ansible/exam_inv/
```

```json
$ ansible-inventory --list

 [WARNING]:  * Failed to parse /etc/ansible/exam_inv/inv.py with script plugin: problem running
/etc/ansible/exam_inv/inv.py --list ([Errno 13] Permission denied)

 [WARNING]:  * Failed to parse /etc/ansible/exam_inv/inv.py with ini plugin: /etc/ansible/exam_inv/inv.py:2:
Expected key=value host variable assignment, got: os

 [WARNING]: Unable to parse /etc/ansible/exam_inv/inv.py as an inventory source

{
    "_meta": {
        "hostvars": {
            "localhost": {},
            "node1": {},
            "node2": {}
        }
    },
    "all": {
        "children": [
            "labservers",
            "ungrouped",
            "web"
        ]
    },
    "labservers": {
        "hosts": [
            "node1"
        ]
    },
    "ungrouped": {
        "hosts": [
            "localhost",
            "node1",
            "node2"
        ]
    },
    "web": {
        "hosts": [
            "node2"
        ]
    }
}
```

```json
$ ll /etc/ansible/exam_inv/
total 12
-rw-r--r--. 1 ansible ansible   22 Oct 30 14:22 inv1
-rw-r--r--. 1 ansible ansible   32 Oct 30 14:22 inv2
-rw-r--r--. 1 ansible ansible 1732 Oct 30 14:22 inv.py

$ chmod 744 /etc/ansible/exam_inv/inv.py

$ /etc/ansible/exam_inv/inv.py --list
{"group": {"hosts": ["node1", "node2"], "vars": {"example_variable": "value"}}, "_meta": {"hostvars": {"node1": {"host_specific_var": "foo"}, "node2": {"host_specific_var": "bar"}}}}
```

```json
$ ansible-inventory --list
{
    "_meta": {
        "hostvars": {
            "localhost": {},
            "node1": {
                "example_variable": "value",
                "host_specific_var": "foo"
            },
            "node2": {
                "example_variable": "value",
                "host_specific_var": "bar"
            }
        }
    },
    "all": {
        "children": [
            "group",
            "labservers",
            "ungrouped",
            "web"
        ]
    },
    "group": {
        "hosts": [
            "node1",
            "node2"
        ]
    },
    "labservers": {
        "hosts": [
            "node1"
        ]
    },
    "ungrouped": {
        "hosts": [
            "localhost",
            "node1",
            "node2"
        ]
    },
    "web": {
        "hosts": [
            "node2"
        ]
    }
}
```