`$ ansible node1 -m setup -a "filter=*ipv4*"`

```json
node1 | SUCCESS => {
    "ansible_facts": {
        "ansible_all_ipv4_addresses": [
            "10.0.1.237"
        ],
        "ansible_default_ipv4": {
            "address": "10.0.1.237",
            "alias": "eth0",
            "broadcast": "10.0.1.255",
            "gateway": "10.0.1.1",
            "interface": "eth0",
            "macaddress": "02:1a:2d:7d:4e:af",
            "mtu": 9001,
            "netmask": "255.255.255.0",
            "network": "10.0.1.0",
            "type": "ether"
        }
    },
    "changed": false
}
```

`$ ansible node1 -m setup -a "filter=*dist*"`
```json
node1 | SUCCESS => {
    "ansible_facts": {
        "ansible_distribution": "RedHat",
        "ansible_distribution_file_parsed": true,
        "ansible_distribution_file_path": "/etc/redhat-release",
        "ansible_distribution_file_variety": "RedHat",
        "ansible_distribution_major_version": "7",
        "ansible_distribution_release": "Maipo",
        "ansible_distribution_version": "7.8"
    },
    "changed": false
}
```