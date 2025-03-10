# Custom Facts
On target host machines (not the Ansible Controller):
* Create ```/etc/ansible/facts.d``` directory, even if Ansible is not installed on the host (doesn't need to be).
* Create files with ```.fact``` extension to be gathered by the Ansible Controller.

Fact files can be INI, JSON, or an executable that returns JSON.

`host1:/etc/ansible/facts.d/software_inv.fact`
```
[software]
adobe=installed
dreamweaver=uninstalled
office=installed
```

`host1:/etc/ansible/facts.d/data.fact`
```
[location]
floor=1
room=325
```

## Review custom facts:
```
ansible scoldham2 -m setup -a "filter=ansible_local"
```